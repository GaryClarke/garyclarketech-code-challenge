<?php

/**
 * Instantiate the Route class by providing ONLY the $name and $methods args
 * The defaults will be used for all other values
 *
 * Course: https://www.garyclarke.tech/p/learn-object-oriented-php
 */
class Route
{
    public function __construct(
        ?string $path = '/',
        ?string $name = null,
        array $options = [],
        array $defaults = [],
        array $methods = [],
        array $schemes = []
    ) {
    }
}
