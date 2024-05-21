<?php

namespace App;

class Logger
{
    public static function error(string $message)
    {
        echo "Error $message" . PHP_EOL;
    }

    public static function info(string $message)
    {
        echo "Info $message" . PHP_EOL;
    }
}