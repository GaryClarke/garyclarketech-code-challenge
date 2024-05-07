<?php

declare(strict_types=1);

namespace App;

/**
 * How can I edit this high-level module (OrderProcessor) so that it depends upon
 * an abstraction, rather than a concrete implementation (HttpClient)
 *
 * Also, how would you change the unit test to work around this abstraction.
 */
class OrderProcessor
{
    public function processOrder(array $orderData): array
    {
        // Process the order...
        $orderData['order_processed'] = true;

        $httpClient = new HttpClient('https://expensive-third-party-service.com/orders');

        // Post the order data
        $httpClient->post(json_encode($orderData));

        // Return the processed order
        return $orderData;
    }
}
