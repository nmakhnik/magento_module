<?php
/**
 * Default bootstrap
 *
 * @category     Speroteck
 * @copyright    Copyright (c) 2013 Speroteck Inc. (www.speroteck.com)
 * @author       Speroteck team (dev@speroteck.com)
 */

/**
 * init Mage
 */
function initMage()
{
    chdir(dirname(__FILE__));
    require_once '../../app/Mage.php';
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    umask(0);
    Mage::app('admin', 'store');
}
initMage();