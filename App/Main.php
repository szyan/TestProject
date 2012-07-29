<?php
/**
 * App
 *
 * @category   BEAR
 * @package    BEAR.app
 * @subpackage Main
 * @author     $Author:$ <username@example.com>
 * @license    @license@ http://@license_url@
 * @version    Release: 0.9.06 $Id:$
 * @link       http://@link_url@
 */

/**
 * Main
 *
 * @category   BEAR
 * @package    BEAR.app
 * @subpackage Main
 * @author     $Author:$ <username@example.com>
 * @license    @license@ http://@license_url@
 * @version    Release: 0.9.06 $Id:$
 * @link       http://@link_url@
 */
class App_Main extends BEAR_Main
{
    /**
     * Inject
     *
     * @return void
     */
    public function onInject()
    {
        parent::onInject();
    }

    /**
     * Inject multi UA
     *
     * @return void
     */
    public function onInjectUA()
    {
        // UA Sniffing
        BEAR_Main_Ua_Injector::inject($this, $this->_config);
        parent::onInject();
    }
}
