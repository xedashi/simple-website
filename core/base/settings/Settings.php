<?php

namespace core\base\settings;

class Settings {
    static private $_instance; 
    private $routes = [
        'admin' => [
            'name' => 'admin',
            'path' => 'core/admin/controllers/',
            'hrUrl' => false
        ],
        'settings' => [
            'path' => 'core/base/settings/'
        ],
        'plugins' => [
            'path' => 'core/plugins/',
            'hrUrl' => false
        ],
        'user' => [
            'path' => 'core/user/controllers',
            'hrUrl' => true,
            'routes' => [

            ]
            ],
        'default' => [
            'controller' => 'IndexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'outputData'
        ]

    ];

    private function __construct()
    {
        
    }
    private function __clone() {
        
    }
    public static function getInstance() {
        if(self::$_instance instanceof self) {
            return self::$_instance;
        }
        return self::$_instance = new self;

    }
}