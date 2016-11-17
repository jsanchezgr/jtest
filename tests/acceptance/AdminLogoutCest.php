<?php


class AdminLogoutCest
{
    public function logout(AcceptanceTester $I)
    {
        $I->amOnPage('/administrator/index.php?option=com_content&task=article.add');
        $I->comment('It\'s article form');
    }
}
