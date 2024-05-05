<?php

use App\Exception\NotFoundException;
use Psr\Container\ContainerInterface;

require_once 'vendor/autoload.php';

class Container implements ContainerInterface
{
    private array $entries = [];

    public function set(string $id, mixed $entry): void
    {
        $this->entries[$id] = $entry;
    }

    public function get($id): mixed
    {
        if (!$this->has($id)) {
            throw new NotFoundException("$id not found");
        }

        return $this->entries[$id];
    }

    public function has($id): bool
    {
        // .. what goes here?
    }
}
