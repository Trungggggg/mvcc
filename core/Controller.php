<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-26
 * Time: 09:52
 */
namespace core;

class Controller
{
    private $view;
    protected $model;

    public function __construct() {
        $this->view = new View();
        $this->model = [];
    }

    public function render($file, $data = [], $layout = null) {
        $this->view->render($file, $data, $layout);
    }

    public function loadModel($name)
    {
        require "models/$name.php";
        $classname = "models\\" . ucfirst($name ) . "Model";
        $this->model[$name] = new $classname();
    }

}