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
$serialized = serialize($config);
print $serialized . PHP_EOL;


