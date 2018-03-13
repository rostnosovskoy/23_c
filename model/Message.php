<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 13.03.2018
 * Time: 19:24
 */

namespace model;


use lib\Model;

class Message extends Model
{

    public function addMessage(array $data)
    {
        $sql = "insert into messages (name, email, message) VALUES (?, ?, ?) ";

        $this->db->exec($sql, $data);
    }
}