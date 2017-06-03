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
    public function index()
    {
        $this->render('admin/index.php');
    }

    public function user()
    {
        $this->render('admin/user.php');
    }

}