<?php
/**
 * Created by PhpStorm.
 * User: briezler
 * Date: 12.05.16
 * Time: 18:28
 */

namespace Pixelink\Test\Hooks;

class LoginNotification
{
    /**
     * FeUser Array
     *
     * @var array
     */
    protected $user = array();
    
    /**
     * fetch user data from user which is logged in
     */
    function __construct() {
        $this->user = $GLOBALS['TSFE']->fe_user->user;

    }

    /**
     * If the firstLogin Change force ist activated and lastlogin has not been updated
     * the redirect takes effect
     */
    public function sendNotification() {
        var_dump('hossa');
        exit;
    }

}