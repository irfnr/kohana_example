<?php
use \TestGuy;

class LoginCest
{

    public function checkLoginLandingPage(TestGuy $I) 
    {
    	$I->wantTo('See login landing page');
    	$I->amOnPage('/');
    	$I->see('Login Page','h2');
    } 

	public function submitLoginFormWthInvalidUserDetails(TestGuy $I) 
	{
		$I->wantTo('Login with Invalid details');
		$this->username = 'irfan';
		$this->password = 'wrong_password';
		$this->userLogin($I);
		$I->seeInCurrentUrl('user/login');
	}

	public function submitLoginFormWthValidUserDetails(TestGuy $I) 
	{
		$I->wantTo('Login with valid details');
		$this->username = 'irfan';
		$this->password = '12345678';
		$this->userLogin($I);
		$I->seeInCurrentUrl('user/index');
		$I->see('irfan','h2');
	}
	
	protected function userLogin($I) 
    {
		$I->amOnPage('/');
		$I->fillField('username',$this->username);
    	$I->fillField('password',$this->password);
    	$I->click('btn_submit');
	}
}