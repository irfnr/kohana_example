<?php defined('SYSPATH') or die('No direct script access.');

class Model_subuser extends ORM {
 
	protected $_rules = array(
        'username' => array(
            'not_empty'  => NULL,
            'min_length' => array(4),
            'max_length' => array(32),
            'regex'      => array('/^[-\pL\pN_.]++$/uD'),
        ),
        'email' => array(
            'not_empty'  => NULL,
            'email' => 'email',
            ),
        'password' => array(
            'not_empty'  => NULL,
            'min_length' => array(8),
            'max_length' => array(10)
        )
    );


    public function create_subuser($values, $expected)
    {
        return $this->values($values, $expected)->create();
    }


}
