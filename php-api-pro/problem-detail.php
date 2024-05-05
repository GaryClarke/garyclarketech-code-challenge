<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

/**
 * Challenge:
 *
 * Given a status code, such as $statusCode = 403, what code is needed to retrieve
 * the corresponding URL that provides information about the problem.
 * Use the ProblemDetail enum below to accomplish this task.
 *
 * Courses: https://www.garyclarke.tech/p/php-api-pro
 * | https://www.garyclarke.tech/p/learn-object-oriented-php
 */
enum ProblemDetail: int
{
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case FORBIDDEN = 403;
    // ...

    public function type(): string
    {
        return match ($this) {
            self::BAD_REQUEST => 'https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.1',
            self::UNAUTHORIZED => 'https://datatracker.ietf.org/doc/html/rfc7235#section-3.1',
            self::FORBIDDEN => 'https://datatracker.ietf.org/doc/html/rfc7231#section-6.5.3',
            default => 'about:blank'
        };
    }
}

$statusCode = 403;
