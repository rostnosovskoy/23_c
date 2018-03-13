<?php

use lib\Lang;
use lib\LangFilse;

/**
 * @param $phrase
 */
function __($phrase, $default = '')
{
//    $lang = Lang::getInstanse();
    $lang = LangFilse::getInstanse();

    return $lang->translate($phrase, $default);
}

function getFlash()
{
    $ses = \lib\Session::getInstanse();
    return $ses->get('flash', true);
}
