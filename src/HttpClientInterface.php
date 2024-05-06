<?php

declare(strict_types=1);

namespace App;

interface HttpClientInterface
{
    public function post(string $data);
}
