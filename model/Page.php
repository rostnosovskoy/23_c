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

    public function getPageByAlias($alias)
    {
        $sql = "select * form pages where alias = ? limit 1";

        $pages = $this->db->exec($sql, [$alias]);
        if (!$page = $pages[0]){
            $alias = htmlspecialchars($alias);
            http_response_code(404);
            throw new \Exception("Page {$alias} not found.");
        }
        return $page;
    }

}