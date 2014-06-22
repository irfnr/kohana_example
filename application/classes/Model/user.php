<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends AutoModeler_ORM {

	protected $_table_name = 'users';
 

	protected $_data = array(
		'id' 					=> NULL,
		'username' 				=> '',
		'password' 				=> '',
		'created' 				=> '',
		'modified' 				=> '',
	);

	protected $_rules = array(
		'username' 				=> array(array('not_empty'), array('email')),
		'password' 				=> array(array('not_empty')),
	);

	/**
	 * You can select a user by id and username. The username is in this case an email.
	 *
	 * @param mixed $id The id or username to select a user by
	 */
	public function __construct($id = NULL)
	{
		if ( ! is_numeric($id) && $id !== NULL)
		{
			$this->load(db::select_array($this->fields())->where($this->_table_name.'.username', '=', $id));
		}
		else
		{
			parent::__construct($id);
		}
	}

	/**
	 * Overwrite set fields to hash the password when one is given and not empty.
	 *
	 * @param array $data
	 */
	public function set_fields(array $data)
	{
		if (isset($data['password']) AND ! empty($data['password']))
		{
			$data['password'] = Auth::instance()->hash($data['password']);
		}

		parent::set_fields($data);
	}

	/**
	 * Extend the save function to add the create and modify date
	 *
	 * @param mixed $validation a manual validation object to combine the model properties with
	 * @return int
	 */
	public function save($validation = NULL)
	{
		if ($this->id == NULL)
		{
			$this->created = date('Y-m-d H:i:s');
		}

		$this->modified = date('Y-m-d H:i:s');

		return parent::save($validation);
	}

	public function get_name()
	{
		return $this->_data['first_name']." ".$this->_data['middle_name'].$this->_data['last_name'];
	}
}
