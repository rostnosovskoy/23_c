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
    protected $params= [];

    /**
     * @param mixed $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

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

    public function redirect($url, $code = 302)
    {
        Router::redirect($url, $code);
    }

    protected function setFlash($msg)
    {
        Session::getInstanse()->set('flash', $msg);
    }
}
