<?php

declare(strict_types=1);

class Config
{
    public function __construct(
        private string $host,
        private string $password
    ) {
    }

    public function _serialize(): array
    {
        return [
            'host' => $this->host,
            'user' => $this->password,
        ];
    }
}

$config = new Config('https://some-host', 'super-secret-password');
$serialized = serialize($config);
dd($serialized);


