<?php
/**
* AutoModelerORM
*
* @package        AutoModeler
* @author         Robert-Jan de Dreu
* @copyright      (c) 2011 Affiliate4you
*/

class AutoModeler_ORM extends AutoModeler_ORM_Core
{
	protected $_persistent_relations = array();


	/**
	 * Magic set method, can set many to many relationships
	 *
	 * @param string $key the key to set
	 * @param mixed  $value the value to set the key to
	 *
	 * @return none
	 */
	public function __set($key, $value)
	{
		if (in_array($key, $this->_has_many) AND in_array($key, $this->_persistent_relations))
		{
			$related_table = AutoModeler::factory(inflector::singular($key))->get_table_name();
			$this_key = inflector::singular($this->_table_name).'_id';
			$f_key = inflector::singular($related_table).'_id';
			$time = date('Y-m-d H:i:s');

			// See if this is already in the join table
			$join_exists = db::select('*')->from($this->_table_name.'_'.$related_table)->where($f_key, '=', $value)->where($this_key, '=', $this->_data['id'])->execute($this->_db);
			if ( ! count($join_exists))
			{
				// Insert
				db::insert($this->_table_name.'_'.$related_table)->columns(array($f_key, $this_key, 'active', 'created', 'modified'))
					->values(array($value, $this->_data['id'], 1, $time, $time))
					->execute($this->_db);
			}
			else
			{
				$current_join = $join_exists->current();
				if($current_join['active'] == 0)
				{
					db::update($this->_table_name.'_'.$related_table)
						->set(array('active' => 1, 'modified' => $time))
						->where($f_key, '=', $value)
						->where($this_key, '=', $this->_data['id'])
						->execute($this->_db);
				}
			}
		}
		else if (in_array($key, $this->_belongs_to) AND in_array($key, $this->_persistent_relations))
		{
			$related_table = AutoModeler::factory(inflector::singular($key))->get_table_name();
			$this_key = inflector::singular($this->_table_name).'_id';
			$f_key = inflector::singular($related_table).'_id';
			$time = date('Y-m-d H:i:s');

			// See if this is already in the join table
			$join_exists = db::select('*')->from($related_table.'_'.$this->_table_name)->where($this_key, '=', $this->_data['id'])->where($f_key, '=', $value)->execute($this->_db);

			if ( ! count($join_exists))
			{
				// Insert
				db::insert($related_table.'_'.$this->_table_name, array($f_key, $this_key, 'active', 'created', 'modified'))
					->values(array($value, $this->_data['id'], 1, $time, $time))
				->execute($this->_db);
			}
			else
			{
				$current_join = $join_exists->current();
				if($current_join['active'] == 0)
				{
					db::update($related_table.'_'.$this->_table_name)
						->set(array('active' => 1, 'modified' => $time))
						->where($f_key, '=', $value)
						->and_where($this_key, '=', $this->_data['id'])
						->execute($this->_db);
				}
			}
		}
		else
		{
			parent::__set($key, $value);
		}
	}

	/**
	 * Finds relations of a has_many relationship with a twist. These results are based on an active field
	 *
	 * 	// Finds all roles belonging to a user
	 * 	$user->find_related('roles');
	 *
	 * @param string   $key   the model name to look for
	 * @param Database_Query_Builder_Select $query A select object to filter results with
	 * @param bool $show_inactive Show records that are set to inactive
	 *
	 * @return Database_Result
	 */
	public function find_related($key, Database_Query_Builder_Select $query = NULL, $show_inactive = FALSE)
	{
		$model = 'Model_'.inflector::singular($key);

		$temp = new $model();
		if ( ! $query)
		{
			$query = db::select_array($temp->fields());
		}

		if ($show_inactive === FALSE)
		{
			$query->where($key.'.active', '=', '1');
		}

		// Get a many to many relationship with persistent relations
		if (in_array($key, $this->_has_many) AND in_array($key, $this->_persistent_relations))
		{
			$related_table = AutoModeler::factory(inflector::singular($key))->get_table_name();
			$join_table = $this->_table_name.'_'.$related_table;
			$this_key = inflector::singular($this->_table_name).'_id';
			$f_key = inflector::singular($related_table).'_id';

			$columns = AutoModeler::factory(inflector::singular($key))->fields();

			$query = $query->from($related_table)->join($join_table)->on($join_table.'.'.$f_key, '=', $related_table.'.id');
			$query->where($join_table.'.'.$this_key, '=', $this->_data['id'])
				->and_where($join_table.'.active', '=', 1);
			return $temp->load($query, NULL);
		}
		else
		{
			return parent::find_related($key, $query);
		}
	}

	/**
	 * Finds parents of a belongs_to model. These results are based on an active field
	 *
	 * 	// Finds all users related to a role
	 * 	$role->find_parent('users');
	 *
	 * @param string                        $key   the model name to look for
	 * @param Database_Query_Builder_Select $query A select object to filter results with
	 *
	 * @return Database_Result
	 */
	public function find_parent($key, Database_Query_Builder_Select $query = NULL, $show_inactive = FALSE)
	{
		$parent = AutoModeler::factory(inflector::singular($key));
		$columns = $parent->fields();

		if ( ! $query)
		{
			$query = db::select_array($parent->fields());
		}

		if ($show_inactive === FALSE)
		{
			// I'm double converting this because plural will change users in userses
			$query->where(inflector::plural(inflector::singular($key)).'.active', '=', '1');
		}

		// Get a many to many relationship with persistent relations
		if(in_array($key, $this->_belongs_to) AND in_array($key, $this->_persistent_relations))
		{
			$related_table = $parent->get_table_name();
			$join_table = $related_table.'_'.$this->_table_name;
			$f_key = inflector::singular($this->_table_name).'_id';
			$this_key = inflector::singular($related_table).'_id';

			$columns = AutoModeler::factory(inflector::singular($key))->fields();

			$query = $query->join($join_table)
				->on($join_table.'.'.$this_key, '=', $related_table.'.id')
				->from($related_table)
				->where($join_table.'.'.$f_key, '=', $this->_data['id'])
				->and_where($join_table.'.active', '=', 1);
			return $parent->load($query, NULL);
		}
		else
		{
			return parent::find_parent($key, $query);
		}
	}

	/**
	 * Tests if a many to many relationship exists. These results are based on an active field
	 *
	 * Model must have a _has_many relationship with the other model, which is
	 * passed as the first parameter in plural form without the Model_ prefix.
	 *
	 * The second parameter is the id of the related model to test the relationship of.
	 *
	 * 	$user = new Model_User(1);
	 * 	$user->has('roles', Model_Role::LOGIN);
	 *
	 * @param string $key   the model name to look for (plural)
	 * @param string $value an id to search for
	 *
	 * @return bool
	 */
	public function has($key, $value)
	{
		$related_table = AutoModeler::factory(inflector::singular($key))->get_table_name();
		$join_table = $this->_table_name.'_'.$related_table;
		$f_key = inflector::singular($related_table).'_id';
		$this_key = inflector::singular($this->_table_name).'_id';

		if (in_array($key, $this->_has_many) AND in_array($key, $this->_persistent_relations))
		{
			return (bool) db::select($related_table.'.id')->
				from(AutoModeler::factory(inflector::singular($key))->get_table_name())->
				where($join_table.'.'.$this_key, '=', $this->_data['id'])->
				where($join_table.'.'.$f_key, '=', $value)->
				where($join_table.'.active', '=', 1)->
				join($join_table)->on($join_table.'.'.$f_key, '=', $related_table.'.id')->
				execute($this->_db)->count();
		}
		else
		{
			return parent::has($key, $value);
		}
	}

	/**
	 * Removes a has_many relationship if you aren't using innoDB (shame on you!)
	 *
	 * Model must have a _has_many relationship with the other model, which is
	 * passed as the first parameter in plural form without the Model_ prefix.
	 *
	 * The second parameter is the id of the related model to remove.
	 *
	 * @param string $key the model name to look for
	 * @param string $id  an id to search for
	 *
	 * @return integer
	 */
	public function remove($key, $id)
	{
		if(in_array(inflector::plural($key), $this->_persistent_relations))
		{
			return db::update($this->_table_name.'_'.AutoModeler::factory(inflector::singular($key))->get_table_name())
				->set(array('active' => 0))
				->where(inflector::singular($key).'_id', '=', $id)
				->where(inflector::singular($this->_table_name).'_id', '=', $this->_data['id'])
				->execute($this->_db);
		}
		else
		{
			return parent::remove($key, $id);
		}
	}

	/**
	 * Removes all relationships of a model
	 *
	 * Model must have a _has_many or _belongs_to relationship with the other model, which is
	 * passed as the first parameter in plural form without the Model_ prefix.
	 *
	 * @param string $key the model name to look for
	 *
	 * @return integer
	 */
	public function remove_all($key)
	{
		if (in_array($key, $this->_has_many) AND in_array($key, $this->_persistent_relations))
		{
			return db::update($this->_table_name.'_'.AutoModeler::factory(inflector::singular($key))->get_table_name())
				->set(array('active' => 0))
				->where(inflector::singular($this->_table_name).'_id', '=', $this->_data['id'])
				->execute($this->_db);
		}
		else if (in_array($key, $this->_belongs_to) AND in_array($key, $this->_persistent_relations))
		{
			return db::update(AutoModeler::factory(inflector::singular($key))->get_table_name().'_'.$this->_table_name)
				->set(array('active' => 0))
				->where(inflector::singular($this->_table_name).'_id', '=', $this->id)
				->execute($this->_db);
		}
		else
		{
			return parent::remove_all($key);
		}
	}

	/**
	 * Check if this item belongs to the parent id you send
	 *
	 * @param $key the model name to look for
	 * @param $id the id of the item that you want to check
	 * @return bool
	 */
	public function belongs_to($key, $id, $show_inactive = FALSE)
	{
		// The id may not be empty or null
		if(empty($id) AND $id === NULL)
		{
			throw new AutoModeler_Exception('You need to set an id for belongs_to in '.get_class($this));
		}

		// Check if we are allowed to edit this contact
		$belongs_to = false;

		$parents = $this->find_parent($key, NULL, $show_inactive);
		foreach($parents as $parent)
		{
			if($parent->id == $id)
			{
				$belongs_to = true;
			}
		}

		return $belongs_to;
	}
}
