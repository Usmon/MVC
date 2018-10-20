<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 20.10.2018
 * Time: 10:36
 */

namespace system\main;

Class Controller {

    public $layout = 'main';

    /**
     * @param string $view
     * @param array $data
     * @return string
     * */
    public function render($view, $data = []){
        echo $view;
    }

}