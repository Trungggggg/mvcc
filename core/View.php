<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019-02-26
 * Time: 09:58
 */
namespace core;

class View {

    public function __construct()
    {
    }

    public function render($file, $data=[], $layout = null)
    {
        if (is_null($layout)) {
            extract($data);
            require 'view/'.$file.'.php';
        } else {
            $data['content'] = 'view/index.php';
            $this->render($layout, $data);
        }
    }
}