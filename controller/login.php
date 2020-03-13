<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-25
 * Time: 15:02
 */
namespace controller;
use core\Controller;

class LoginController extends Controller {

    public function __construct() {
    }

    public function index() {
        echo "<h1>HELLO</h1>";
    }

    public function auth() {
        echo "auth...";
        // xử ly login
        // select db where.....
    }

    public function update($id, $name, $email)
    {
        echo "Delete " . $name . $email;
    }

    public function add($name, $email)
    {
        echo "Add " .$name . $email;
    }

    public function del($id)
    {
        echo "Delete " . $id;
    }

    public function logout() {
        echo "logout...";
    }

}
