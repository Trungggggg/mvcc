<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-25
 * Time: 15:23
 */
namespace controller;
use core\Controller;

class HomeController extends Controller
{
    public function __construct() {
    }

    public function index()
    {
        echo "<h1> HOME </h1>";
    }
}