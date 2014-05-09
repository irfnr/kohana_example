<?php
use \WebGuy;

class LogoutCest
{

    public function checkLogoutLinkOnUserInfoPage(WebGuy $I) 
    {
		$I->wantTo('see logout link');
		$this->username = 'irfan';
    	$this->password = '12345678';
    	$this->userLogin($I);
    	$I->seeInCurrentUrl('user/index');
		$I->seeLink('Logout'); 
	}

	public function clickLogoutUrlToLogoutUser(WebGuy $I) 
	{
		$I->wantTo('click logout link to logout user');
		$this->username = 'irfan';
    	$this->password = '12345678';
    	$this->userLogin($I);
    	$I->seeInCurrentUrl('user/index');
		$I->click('Logout');
		$I->seeInCurrentUrl('user/login');

	}
 
	protected function userLogin($I) 
	{
		$I->amOnPage('/');
		$I->fillField('username',$this->username);
    	$I->fillField('password',$this->password);
    	$I->click('btn_submit');
	}

}