<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

	/*public function __construct() {

	}*/
	
	public function action_index()
	{
		$this->template->content = View::factory('user/info')
			->bind('user', $user);
		
		// Load the user information
		$user = Auth::instance()->get_user();
		
		 
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			HTTP::redirect('user/login');
		}
	}

	public function action_create() 
	{
		$this->template->content = View::factory('user/create')
			->bind('errors', $errors)
			->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{			
			try {

				// Create the user using form values
				$user = ORM::factory('user')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
				
				// Grant user login role
				$user->add('roles', ORM::factory('role', array('name' => 'login')));
				 
				// Reset values so form is not sticky
				$_POST = array();
				
				// Set success message
				$message = "You have added user '{$user->username}' to the database";
				
			} catch (ORM_Validation_Exception $e) {
				
				// Set failure message
				$message = 'There were errors, please see form below.';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}

	public function action_logout() 
	{
		// Log user out
		Auth::instance()->logout();
		
		// Redirect to login page
		 HTTP::redirect('user/login');
	}

	public function action_login() 
	{
		$this->template->content = View::factory('user/login')
			->bind('message', $message);
			
		if ( $this->checkIfRequestMethodIsPost() ) 
		{
			if ($this->loginWithUserDetails()) 
			{
				HTTP::redirect('user/index');
			} 

			$message = 'Login failed';
			 
		}
	}

	public function action_sub_users() 
	{
		 $subUsers = ORM::factory('subuser');
		 $totalSubUsers = $subUsers->find_all();
		 $userData = $this->returnSessionData();
		 
		 if ( $this->checkIfRequestMethodIsPost() )
		 {
			$postData = $this->request->post();
			$postData['owner_id'] = $userData->id;
			 
			$newSubUser = ORM::factory('subuser')->create_subuser($this->request->post(), array(
					'username',
					'password',
					'email',
					'owner_id'	
				));
			$message = 'Sub user added succesfully';
			// Reset values so form is not sticky
			$_POST = array();

		 }

		 $this->template->content = View::factory('user/subusers')
		 ->bind('user', $userData)
		 ->bind('message', $message)
		 ->bind('totalSubUsers', $totalSubUsers);
	}


	private function checkIfRequestMethodIsPost() {
		return HTTP_Request::POST == $this->request->method();
	}

	private function loginWithUserDetails() {
		 $user = ORM::factory('user')
		->where('username', '=', 'test14')
		->find();
		$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
		return Auth::instance()
			   ->login($this->request->post('username'), $this->request->post('password'), $remember);
	}
	
	private function  returnSessionData() 
	{
		$session =   Session::instance();
		return $session->get('auth_user');
	}

}