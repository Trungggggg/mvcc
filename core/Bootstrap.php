<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-26
 * Time: 14:22
 */

namespace core;
use controller;

class Bootstrap
{

    public function __construct()
    {

        $url = isset($_GET["url"]) ? $_GET["url"] : null;

        $this->loadCore();

//        $config = new Config();
//        $config->loadConfig();


        if (empty($url[0])) {
            $this->renderIndex();
        } else {
            $this->renderPage($url);
        }
    }

    public function loadController($name)
    {
        require $this->filePath($name);
        $classname = "controller\\". $name . "Controller";
        return new $classname();
    }

    public function filePath($name)
    {
        return "controller/$name.php";
    }

    public function renderError($msg = "Has Error") {
        require 'Error.php';
        $ctrl = new Error($msg);
        $ctrl->index();
    }

    public function renderIndex() {
        require "controller/index.php";
        $ctrl = new controller\IndexController();
        $ctrl->index();
    }

    public function renderPage($url)
    {
        $url = explode('/', rtrim($url, '/'));
        if (file_exists($this->filePath($url[0]))){
            $this->callAction($url);
        } else {
            $this->renderError("404. File not found");
        }
    }

    public function callAction($url)
    {
        $ctrl = $this->loadController($url[0]);
        if ( isset($url[1]) ) {
            if (isset($url[2])) {
                $ctrl->{$url[1]}(...array_slice($url,2));
            }
            else {
                $ctrl->{$url[1]}();
            }
        } else {
            $ctrl->index();
        }
    }

    public function loadCore() {
        require 'core/Controller.php';
        require 'core/View.php';
        require 'core/Model.php';
        require 'core/Database.php';
        require 'core/Config.php';
        require 'core/QueryBuilder.php';
    }

}