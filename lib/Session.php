<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 13.03.2018
 * Time: 20:25
 */

namespace lib;


class Session
{

    public static function set($name, $val)
    {
        $_SESSION[$name] = $val;
    }

    public static function get($name, $remove = false)
    {
        $val = @$_SESSION[$name];

        if ($remove){
            unset($_SESSION[$name]);

        }
        return $val;
    }

    private static $instance;

    private function __construct(){}

    public static function getInstanse()
    {
        if (!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

}