<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 13.03.2018
 * Time: 9:53
 */

namespace lib;


class Model
{
    /**@var DB */
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function __getAllPages()
    {
        $this->db = $db;
    }
}