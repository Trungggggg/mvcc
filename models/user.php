<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-26
 * Time: 09:54
 */

namespace models;
use core\Model;

class UserModel extends Model
{
    protected $table = "users";

    public function __construct()
    {
        parent::__construct();
    }

}