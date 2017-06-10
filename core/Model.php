<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 10.06.2017
 * Time: 13:47
 */

namespace core;

class Model extends Db
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->table = $this->table();
    }

    public function table()
    {
        return '';
    }

}