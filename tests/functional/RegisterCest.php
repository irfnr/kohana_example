<?php
use \TestGuy;

class RegisterCest
{

    public function seeRegisterPageOnClickingRegisterLinkOnLoginPage(TestGuy $I) 
    {
    	$I->wantTo('See register page');
    	$I->amOnPage('/');
    	$I->click('create a new account');
    	$I->seeInCurrentUrl('create');
    	$I->see('Register New User','h2');
    }

    public function seeLoginPageOnClickingLoginOnRegisterPage(TestGuy $I) 
    {
    	$I->wantTo('See register page');
    	$I->amOnPage('/user/create');
    	$I->click('login');
    	$I->seeInCurrentUrl('login');
    	$I->see('Login Page','h2');
    }

    public function registerWithInvalidUserData(TestGuy $I) 
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

    public function registerWithValidUserData(TestGuy $I) 
    {
    	$I->wantTo('See registration success message');
    	$I->amOnPage('/user/create');
    	$I->fillField('username','test28');
    	$I->fillField('email','test28@gmail.com');
    	$I->fillField('password','12345678');
    	$I->fillField('password_confirm','12345678');
    	$I->click('create');
    	$I->see("You have added user 'test28' to the database",'h3');
    	$I->seeInCurrentUrl('user/create');

    }

}