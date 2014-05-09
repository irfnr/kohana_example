<?php
use \WebGuy;

class RegisterCest
{

    public function seeRegisterPageOnClickingRegisterLinkOnLoginPage(WebGuy $I) 
    {
    	$I->wantTo('See register page');
    	$I->amOnPage('/');
    	$I->click('create a new account');
    	$I->seeInCurrentUrl('create');
    	$I->see('Register New User','h2');
    }

    public function seeLoginPageOnClickingLoginOnRegisterPage(WebGuy $I) 
    {
    	$I->wantTo('See register page');
    	$I->amOnPage('/user/create');
    	$I->click('login');
    	$I->seeInCurrentUrl('login');
    	$I->see('Login Page','h2');
    }

    public function registerWithInvalidUserData(WebGuy $I) 
    {
    	$I->wantTo('See registration error message');
    	$I->amOnPage('/user/create');
    	$I->fillField('username','');
    	$I->fillField('email','');
    	$I->fillField('password','');
    	$I->fillField('password_confirm','');
    	$I->click('create');
    	$I->see('There were errors, please see form below','h3');
    	$I->seeInCurrentUrl('user/create');
    }

    public function registerWithValidUserData(WebGuy $I) 
    {
    	$I->wantTo('See registration success message');
    	$I->amOnPage('/user/create');
    	$I->fillField('username','test24');
    	$I->fillField('email','test24@gmail.com');
    	$I->fillField('password','12345678');
    	$I->fillField('password_confirm','12345678');
    	$I->click('create');
    	$I->seeInDatabase('Model_user', ['username' => , 'test24']);
    	$I->see("You have added user 'test23' to the database",'h3');
    	$I->seeInCurrentUrl('user/create');

    }


}