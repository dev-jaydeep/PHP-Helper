<?php

define('DATE_FORMAT', 'Y-m-d H:i:s');

function _pr($s, $exit = 0)
{
    if ($s) {
        echo '<pre>', print_r($s, true), '</pre>';
    }

    if ($exit) {
        exit;
    }
}

function _random_string($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $size = strlen($chars);
    $str = '';
    for ($i = 0; $i < $length; $i++) {
        $str .= $chars[rand(0, $size - 1)];
    }

    return $str;
}

function _date_format($date, $format = '')
{
    return date(($format ? $format : DATE_FORMAT), strtotime($date));
}
