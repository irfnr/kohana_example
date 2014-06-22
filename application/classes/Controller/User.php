<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template 
{

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

	public function action_login() 
	{
		$auth = Auth::instance();
		$post = $this->request->post();
		
		if( ! empty($post))
		{
			if ($auth->login( $post['username'],  $post['password'], TRUE))
			{
				HTTP::redirect('user/dashboard');
			} 

			$message = 'Login failed';
		}

		$this->template->content = View::factory('user/login')
			->bind('message', $message);
	}

	public function action_dashboard()
	{
		echo 'HI';
	}

	public function action_logout() 
	{
		// Log user out
		Auth::instance()->logout();
		
		// Redirect to login page
		 HTTP::redirect('user/login');
	}

	private function _validate_login_details()
	{
		return true;
	}

}