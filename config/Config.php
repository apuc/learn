<?php

namespace config;

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 25.05.2016
 * Time: 12:04
 */
class Config
{

    public function db()
    {
        return [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => '',
            'db' => 'learn',
            'port' => NULL,
            'socket' => NULL,
            'pconnect' => FALSE,
            'charset' => 'utf8',
            'suffix' => '',
        ];
    }

    public function routing()
    {
        return [
            'admin-panel' => 'k-admin',
        ];
    }

    public function user()
    {
        return [
            'rule' => 'user'
        ];
    }

}