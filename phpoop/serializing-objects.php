<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

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


