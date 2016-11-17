<?php


class AdminLoginCest
{
    public function login(AcceptanceTester $I)
    {
        $I->amOnPage('/administrator/index.php');
        $I->comment('Fill Username Text Field');
        $I->fillField('#mod-login-username', 'admin');
        $I->comment('Fill Password Text Field');
        $I->fillField('#mod-login-password', '1234');
        $I->comment('I click Login button');
        $I->click('Log in');
        $I->comment('I see Administrator Control Panel');
        $I->see('Control Panel', '.page-title');
    }
}
