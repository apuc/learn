<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 03.06.2017
 * Time: 13:23
 */

namespace controllers;

use core\Controller;

class Admin extends Controller
{
    public function actIndex()
    {
        return $this->render('index.php');
    }

    public function actUser()
    {
        $user = $this->render('user.php');
        echo $user . '123';
    }

}