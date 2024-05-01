<?php

/**
 * How can you modify the CountableObjectDemo class
 * so that it can be passed into the count() function
 * and counted, making the code on line 23 work
 *
 * Course: https://www.garyclarke.tech/p/learn-object-oriented-php
 */
class CountableObjectDemo
{
    public function __construct(private array $items = [])
    {
    }
}

$demoArray = [
    'name' => 'Gary Clarke',
    'location' => 'London',
    'website' => 'https://www.garyclarke.tech'
];

$countableObject = new CountableObjectDemo($demoArray);

print count($countableObject); // 3
