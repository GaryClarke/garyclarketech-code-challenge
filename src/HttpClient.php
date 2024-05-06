<?php

declare(strict_types=1);

namespace App;

class HttpClient implements HttpClientInterface
{
    public function __construct()
    {
    }

    public function post(string $data)
    {
        sleep(3);
    }
}