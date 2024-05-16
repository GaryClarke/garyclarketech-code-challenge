<?php

require_once 'vendor/autoload.php';

/**
 * Challenge - How do you create the 'next' pagination link?
 *
 * Course: https://www.garyclarke.tech/p/php-api-pro
 */

$totalItems = 35;
$page = 1;
$itemsPerPage = 10;
$totalPages = (int) ceil($totalItems / $itemsPerPage);
$path = '/flights/JF1001-20250101/reservations';

$links = [
    'self'  => sprintf('%s?page=%d&itemsPerPage=%d', $path, $page, $itemsPerPage),
    'first' => sprintf('%s?page=1&itemsPerPage=%d', $path, $itemsPerPage),
    'last'  => sprintf('%s?page=%d&itemsPerPage=%d', $path, $totalPages, $itemsPerPage),
    'prev'  => $page > 1 ? sprintf('%s?page=%d&itemsPerPage=%d', $path, $page - 1, $itemsPerPage) : null,
    'next'  => $page < $totalPages ? sprintf('%s?page=%d&itemsPerPage=%d', $path, $page + 1, $itemsPerPage) : null,
];

// The result will look like this for page 1
$links = [
    'self' => '/flights/JF1001-20250101/reservations?page=1&itemsPerPage=10',
    'first' => '/flights/JF1001-20250101/reservations?page=1&itemsPerPage=10',
    'last' => '/flights/JF1001-20250101/reservations?page=4&itemsPerPage=10',
    'prev' => null,
    'next' => '/flights/JF1001-20250101/reservations?page=2&itemsPerPage=10'
];

