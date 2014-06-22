<?php defined('SYSPATH') or die('No direct access allowed.');

class Auth_Blog extends Auth {

	protected $_session;
	protected $_config;


	protected function _login($user, $password, $remember)
	{
		$user = new Model_User($user);
 
		if ($user->password === $this->hash($password))
		{
			$this->complete_login($user);

			return TRUE;
		}

		// Login failed
		return FALSE;
	}

	public function logout($destroy = FALSE, $logout_all = FALSE)
	{
		/* this is for legacy (I really hate doing this) */
		setcookie('A4Yck', '', -1, '/', $this->_config['session_domain']);
		$this->_session->delete('user_id');
		$this->_session->delete('last_logged_in');
		$this->_session->delete('charts');
		/* end legacy */

		parent::logout($destroy, $logout_all);
	}

	public function complete_login($user)
	{
		$this->_session->set($this->_config['session_key'], $user);
		$this->_session->set('user_id', $user->id);
		$this->_session->set('user_type', $user->type);
		$this->_session->set('last_logged_in', $user->last_logged_in);

		// Save the new last logged in date to the user
		$user->last_logged_in = date('Y-m-d H:i:s');
		$user->save();

		return TRUE;
	}

	public function password($username)
	{
		return Arr::get($this->_users, $username, FALSE);
	}

	/**
	 * Compare password with original (plain text). Works for current (logged in) user
	 *
	 * @param   string  $password
	 * @return  boolean
	 */
	public function check_password($password)
	{
		$username = $this->get_user();

		if ($username === FALSE)
		{
			return FALSE;
		}

		return ($password === $this->password($username));
	}

	public function hash($str)
	{
		return sha1($str.$this->_config['hash_key'], FALSE);
	}
} // End Auth File