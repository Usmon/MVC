<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 20.10.2018
 * Time: 12:33
 */

function app_autoloader($class) {
    include $class . '.php';
}

spl_autoload_register('app_autoloader');