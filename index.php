<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 03.06.2017
 * Time: 12:55
 */
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);

include __DIR__ . '/init.php';

$rout = $_SERVER['REQUEST_URI'];
$rout = explode('/', $rout);

$controller = ucfirst($rout[1]);
if(file_exists(__DIR__ . '/controllers/' . $controller . '.php')){
    $controller = '\controllers\\' . $controller;
    require_once __DIR__ . $controller . '.php';
    $controllerObject = new $controller();
    if(isset($rout[2]) && !empty($rout[2])){
        if(method_exists($controllerObject, $rout[2])){
            $controllerObject->$rout[2]();
        }
        else {
            \core\Debug::prn('Нет такого метода');
        }
    }
    else {
        $controllerObject->index();
    }
    //$action->user();
}
else {
    \core\Debug::prn('Нет такого контролера');
}
