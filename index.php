<?php

define('VG_ACCESS', true);
header('Content-Type:text/html;charset=utf-8');
session_start();
require_once('config.php');
require_once('core/base/settings/internal_settings.php');

set_include_path(get_include_path() .PATH_SEPARATOR.'n1'.PATH_SEPARATOR.'n2');
use core\base\exceptions\RouteException;
use core\base\controllers\RouteController;

try{
    RouteController::getInstance();
}
catch (RouteException $e) {
    exit($e -> getMessage());
}