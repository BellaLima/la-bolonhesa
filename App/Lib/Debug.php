<?php

namespace App\Lib;

class Debug
{
    public static function dd($var, $die = false)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        exit;
    }
}