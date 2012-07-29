<?php
/**
 * Live App
 *
 * optimaized for fastest boot.
 *
 * @category  BEAR
 * @package   BEAR.app
 * @author    $Author:$ <username@example.com>
 * @license   @license@ http://@license_url@
 * @version   Release: 0.9.06 $Id:$
 * @link      http://@link_url@
 */
require_once 'BEAR.php';

define('_BEAR_APP_HOME', realpath(dirname(dirname(__FILE__))));
BEAR::init(BEAR::loadConfig(_BEAR_APP_HOME . '/App/app.yml', true));