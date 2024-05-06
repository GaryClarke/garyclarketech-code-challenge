<?php

declare(strict_types=1);

namespace App;

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
