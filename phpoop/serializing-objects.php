<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

/**
 * How can you modify the Config class
 * so that it can be serialized into the format
 * you see on line 25.
 *
 * Notice that the password has not been serialized 😉
 *
 * Course: https://www.garyclarke.tech/p/learn-object-oriented-php
 */
class Config
{
    public function __construct(
        private string $host,
        private string $password
    ) {
    }
}

$config = new Config('https://some-host', 'super-secret-password');

// 👉 O:6:"Config":1:{s:4:"host";s:17:"https://some-host";}
serialize($config);
