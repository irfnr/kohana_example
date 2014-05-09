<?php
use Codeception\Util\Stub;

class LoginTest extends \Codeception\TestCase\Test
{
   /**
    * @var \CodeGuy
    */
    protected $codeGuy;
    protected $user;

    public function testCheckIfUserClassExists()
    {
        $this->assertTrue( new Controller_User instanceof Controller_User);
         
    }


    public function testLoginWithInvalidUserCredentials() 
    {
      
         $this->assertTrue( Auth::instance() instanceof Auth);
         $this->assertFalse(Auth::instance()->login('irfan','test'));

    }

    public function testLoginWithValidUserCredentials() 
    {
      
         $this->assertTrue( Auth::instance() instanceof Auth);
         $this->assertTrue(Auth::instance()->login('irfan','12345678'));
         

    }

}