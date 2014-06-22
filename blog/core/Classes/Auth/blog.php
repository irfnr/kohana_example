<?php defined('SYSPATH') or die('No direct access allowed.');

class Auth_Blog extends Auth {

	protected $_session;
	protected $_config;

	/**
	 * Checks if a session is active.
	 *
	 * @param mixed $role Role name string, role ORM object, or array with role names
	 * @return boolean
	 */
	public function logged_in($role = NULL)
	{
		// Get the user from the session
		$user = $this->get_user();

		if ( ! $user)
		{
			return FALSE;
		}

		if ( ! $user instanceof Model_User AND ! $user->loaded())
		{
			return FALSE;
		}

		return TRUE;
	}

	/**
	 * Logs a user in.
	 *
	 * @param   string  $user      username
	 * @param   string  $password  password
	 * @param   boolean $remember  enable autologin (not supported)
	 * @return  boolean
	 */
	protected function _login($user, $password, $remember)
	{
		if ( ! is_object($user))
		{
			$username = $user;

			// Load the user
			$user = new Model_User($username);
		}

		// If the passwords match, perform a login
		if ($user->password === $this->hash($password))
		{
			if ($remember === TRUE)
			{
				$cookie_value = $user->name.'|||'.$user->id.'|||'.$user->username.'|||'.$user->password;
				setcookie('A4Yck', $cookie_value, (time() + (14*24*60*60)), '/', $this->_config['session_domain']);
			}

			// Finish the login
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

	/**
	 * Forces a user to be logged in, without specifying a password.
	 *
	 * @param   mixed  $username  username
	 * @return  boolean
	 */
	public function force_login($username)
	{
		// Get the user model
		$user = new Model_User($username);

		// Rewrite the cookie
		$cookie_value = $user->name.'|||'.$user->id.'|||'.$user->username.'|||'.$user->password;
		setcookie('A4Yck', $cookie_value, (time() + (14*24*60*60)), '/', $this->_config['session_domain']);

		// Finish the login
		$this->complete_login($user);
	}

	/**
	 * Logs a user in, based on the authautologin cookie.
	 *
	 * @return mixed
	 */
	public function auto_login()
	{
		if ($token = Arr::get($_COOKIE, 'A4Yck'))
		{
			// Explode the token
			$token = explode('|||', $token);
			$user = new Model_User($token[2]);

			if ($user->loaded() AND $user->password == $token[3])
			{
					// Set the new token
					$cookie_value = $user->name.'|||'.$user->id.'|||'.$user->username.'|||'.$user->password;
					setcookie('A4Yck', $cookie_value, (time() + (14*24*60*60)), '/', $this->_config['session_domain']);

					// Complete the login with the found data
					$this->complete_login($user);

					// Automatic login was successful
					return $user;
			}

			// Token is invalid
			setcookie('A4Yck', '', -1, '/', $this->_config['session_domain']);
		}

		return FALSE;
	}

	/**
	 * Gets the currently logged in user from the session (with auto_login check).
	 * Returns FALSE if no user is currently logged in.
	 *
	 * @param $default
	 * @return  mixed
	 */
	public function get_user($default = NULL)
	{
		$user = parent::get_user();

		if ($user === FALSE)
		{
			// check for "remembered" login
			$user = $this->auto_login();
		}

		return $user;
	}

	/**
	 * Complete the login
	 *
	 * @param $user
	 * @return mixed
	 */
	public function complete_login($user)
	{
		$this->_session->set($this->_config['session_key'], $user);
		$this->_session->set('user_id', $user->id);
		$this->_session->set('user_type', $user->type);
		$this->_session->set('last_logged_in', $user->last_logged_in);

		// Save the new last logged in date to the user
		$user->last_logged_in = date('Y-m-d H:i:s');
		$user->save();

		// Set user as admin
		if ($user->type == 'administrator')
		{
			$this->_session->set('GSgebruiker', $user->id);
			$this->_session->set('is_admin', 1);
		}

		return TRUE;
	}

	/**
	 * Get the stored password for a username.
	 *
	 * @param   mixed   username
	 * @return  string
	 */
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