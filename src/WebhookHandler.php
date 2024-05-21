<?php

namespace App;

use App\Exception\WebhookException;

class WebhookHandler
{
    /**
     * @param Webhook $webhook
     * @return void
     * @throws WebhookException
     */
    public function handle(Webhook $webhook): void
    {
        if (random_int(1, 10) > 5) {
            throw new WebhookException("WebhookException thrown");
        }
    }
}