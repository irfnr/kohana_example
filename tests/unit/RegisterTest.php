<?php
use Codeception\Util\Stub;

class RegisterTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;
    protected $userTable;

    /**
    * @expectedException ORM_Validation_Exception
    */
    public function testUserRegistationWithInvalidData() 
    {
        $postUserData =  array(
            'username' => '',
            'email' => 'test18@gmail.com',
            'password' => '12345678',
            'password_confirm'=>'12345678',
            'create'=>'Create User'
        );

        $this->registerUser($postUserData);
        $this->assertTrue( $this->checkUserInDataBase());
    }

    public function testUserRegistationWithValidData() 
    {
       $postUserData =  array(
            'username' => 'test18',
            'email' => 'test18@gmail.com',
            'password' => '12345678',
            'password_confirm'=>'12345678',
            'create'=>'Create User'
        );

        $this->registerUser($postUserData);
        $this->assertTrue( $this->checkUserInDataBase());
    }

    public function registerUser($postUserData)
    {
        $user = ORM::factory('user')->create_user($postUserData, array(
            'username',
            'email',
            'password'             
        ));
    }

    public function checkUserInDataBase()
    {
         $user = ORM::factory('user')
        ->where('username', '=', 'test18')
        ->find();
        return $user->loaded();
        
    } 
 

}