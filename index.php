<?php
/*
 * Single point of entry
 */

/*
 * The constant for check if the file can be display.
 * Display only this index.php
 * In other files check to see if this constant exists.
 * If VG_ACCESS exists, show the content of the file. If it does not exist - die the script.
 */
@define('VG_ACCESS', true);

header('Content-Type:text/html;charset=utf-8'); // headers are sent before the views is displayed to the user
session_start(); // session start when connect to server, session end when close browser

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';

use core\base\exceptions\RouteException;
use core\base\controller\RouteController;

try {
    RouteController::getInstance()->route();
} catch (RouteException $e) {
    exit($e->getMessage());
}
