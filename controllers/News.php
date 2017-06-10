<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 10.06.2017
 * Time: 13:20
 */

namespace controllers;

use core\Controller;

class News extends Controller
{

    public function actIndex()
    {
        return $this->render('index.php');
    }

}