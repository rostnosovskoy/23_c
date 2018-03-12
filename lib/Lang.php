<?php
/**
 * Created by PhpStorm.
 * User: n.vlasuk
 * Date: 06.03.2018
 * Time: 20:58
 */

namespace lib;


class Lang
{
    private $langs = [];
    private $lang;
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
    public function load($lang)
    {
        $this->lang = $lang;
        $this->langs = include "../lang/lang.php";
    }

    public function translate($phrase, $default = '')
    {
        $result = @$this->langs["{$this->lang}.$phrase"];
        if (!$result) {
            return $default;
        }

        return $result;
    }
}

