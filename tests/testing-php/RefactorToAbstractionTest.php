<?php

declare(strict_types=1);

use App\OrderProcessor;
use PHPUnit\Framework\TestCase;

class RefactorToAbstractionTest extends TestCase
{
    public function testProcessedOrdersAreMarkedCorrectly(): void
    {
        $unit = new OrderProcessor();

        $result = $unit->processOrder(['item' => 'Book', 'quantity' => 1]);

        // Check if 'order_processed' key is set to true
        $this->assertTrue($result['order_processed']);
    }
}
