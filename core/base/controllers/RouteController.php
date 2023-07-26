<?php

namespace core\base\controllers;

class RouteController {
    static private $_instance;
    static public function getInstance() {
        return self::$_instance;
    }
}