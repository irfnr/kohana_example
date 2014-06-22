<?php
use \AcceptanceTester;

class UserLoginCest
{
	public function TestUserSeeDashboardWhenValidDetails()
	{
		$I = new AcceptanceTester($scenario);
		$I->amOnPage('user/login');
		$I->fillField('username','irfanr.cuelogic@gmail.com');
		$I->fillField('password','123456');
		$I->click('Login');
		$I->seeInCurrentUrl('dashboard');
	}
}