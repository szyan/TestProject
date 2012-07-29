<?php
/**
 * App
 *
 * @category   BEAR
 * @package    BEAR.app
 * @subpackage Ro
 * @author     $Author:$ <username@example.com>
 * @license    @license@ http://@license_url@
 * @version    Release: 0.9.06 $Id:$
 * @link       http://@link_url@
 */

/**
 * User/List
 *
 * @category   BEAR
 * @package    BEAR.app
 * @subpackage Ro
 * @author     $Author:$ <username@example.com>
 * @license    @license@ http://@license_url@
 * @version    Release: 0.9.06 $Id:$
 * @link       http://@link_url@
 */
class App_Ro_Test_User_List extends App_Ro_Test_User
{
    /**
     * Read
     *
     * @params array $values
     */
    public function onRead($values)
    {
        return self::$userData;
    }
}