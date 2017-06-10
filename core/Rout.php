<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 10.06.2017
 * Time: 13:27
 */

namespace core;

class Rout
{

    public $action;
    public $controller;

    public function initRouting()
    {
        $rout = $_SERVER['REQUEST_URI'];
        $rout = explode('/', $rout);

        $controller = ucfirst($rout[1]);
        $this->controller = $rout[1];
        if(file_exists(ROOT_DIR . '/controllers/' . $controller . '.php')){
            $controller = '\controllers\\' . $controller;
            require_once ROOT_DIR . $controller . '.php';
            $controllerObject = new $controller();
            if(isset($rout[2]) && !empty($rout[2])){
                $this->action = $rout[2];
                $action = 'act' . ucwords($rout[2]);
                if(method_exists($controllerObject, $action)){
                    $controllerObject->$action();
                }
                else {
                    \core\Debug::prn('Нет такого метода');
                }
            }
            else {
                $this->action = 'index';
                $controllerObject->actIndex();
            }
            //$action->user();
        }
        else {
            \core\Debug::prn('Нет такого контролера');
        }
    }

}