<?php

use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

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
            throw new class("$id not found")
                extends \Exception implements NotFoundExceptionInterface {
            };
        }

        return $this->entries[$id];
    }

    public function has($id): bool
    {
        // .. what goes here?
    }
}
