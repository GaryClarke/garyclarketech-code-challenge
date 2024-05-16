<?php

/**
 * Instantiate the Route class by providing ONLY the $name and $methods args
 * Use these values: $name = 'home', $methods = ['GET', 'POST']
 *
 * The defaults will be used for all other values.
 *
 * Course: https://www.garyclarke.tech/p/learn-object-oriented-php
 */
class Route
{
    public function __construct(
        private ?string $path = '/',
        private ?string $name = null,
        private array $options = [],
        private array $defaults = [],
        private array $methods = [],
        private array $schemes = []
    ) {
    }
}

