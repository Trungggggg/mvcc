<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-26
 * Time: 15:14
 */

namespace core;


class Error extends Controller
{
    private $msg;
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function index()
    {
        echo "<h1>".$this->msg."</h1>";
    }
}