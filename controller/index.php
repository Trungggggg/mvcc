<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-25
 * Time: 14:57
 */
namespace controller;
use core\Controller;

class IndexController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->loadModel("user");
    }

    public function index()
    {
        $data["name"] = "hoangnm";
        $data["email"] = "hoangnm@ows.vn";
//        $arr = $this->model['user']->filter(Array("email"=>"hoangnm@ows.vn", "password"=>"1"));
//        $arr = $this->model['user']->getAll();
//        var_dump($arr);
//        $this->model['user']->add(Array("email"=>"test@demo.com", "password"=>"1234567"));
//        $this->model['user']->update(Array("id"=>4,"email"=>"test_edited@demo.com", "password"=>"edited_1234567"));
//        $this->model['user']->delete(6);
        $this->render('index', $data, 'layout/master');
    }
}
