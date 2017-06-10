<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 03.06.2017
 * Time: 13:29
 */

namespace core;

class Controller
{

    private $parser;

    public function __construct()
    {
        $this->parser = new Parser();
    }

    public function render($view, $data = [])
    {
        return $this->parser->render(ROOT_DIR . '/views/' . $this->getClassName() . '/' . $view , $data);
    }

    public function getClassName()
    {
        $path = explode('\\', get_called_class());
        return strtolower(array_pop($path));
    }

}