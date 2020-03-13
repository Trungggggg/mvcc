<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-27
 * Time: 14:33
 */

namespace core;


class Config
{

    private $config;
    private static $instance = null;
    private function __construct()
    {
        $this->config = [];
        $this->loadConfig();
    }

    public static function newInstance()
    {
        if (self::$instance != null) {
            return self::$instance;
        } else {
            return new Config();
        }
    }

    public function loadConfig() {
        require 'config/database.php';
        $this->config['database'] = $db;
    }

    /**
     * @return array
     */
    public function getConfig($name)
    {
        return $this->config[$name];
    }


}