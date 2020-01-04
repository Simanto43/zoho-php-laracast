<?php

namespace App\core;

class App
{
    protected static $registy = [];

    public static function bind($key, $value)
    {
        static::$registy[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registy)){

            throw new Exception("No{$key} is bound in the container. ");
        }

        return static::$registy[$key];
    }


}