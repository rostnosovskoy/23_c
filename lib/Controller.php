<?php
/**
 * Created by PhpStorm.
 * User: n.vlasuk
 * Date: 06.03.2018
 * Time: 20:15
 */

namespace lib;


abstract class Controller
{
    protected $data = [];
    protected $model;

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    protected function getDB()
    {
        $params = Config::get('db');
        return new DB($params);
    }
}
