<?php

use App\Exception\NotFoundException;
use Psr\Container\ContainerInterface;

require_once 'vendor/autoload.php';

/**
 * Challenge: Implement the `has` method
 *
 * The `has` method should check if the provided identifier exists in the container.
 * Keep in mind that an entry might have been added using the `set` method.
 */
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

$container = new Container();
$exampleClass = new class {};
$container->set('example-entry', $exampleClass);
$res = $container->has('example-entry');
