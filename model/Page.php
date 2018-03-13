<?php
namespace model;
use lib\Model;

/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 13.03.2018
 * Time: 9:45
 */

class Page extends Model
{
    public function getAllPages()
    {
        $pages = $this->db->getAllTable('pages');

        return $pages;
    }

}