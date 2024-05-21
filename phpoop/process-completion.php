<?php

require_once 'vendor/autoload.php';

use App\Exception\WebhookException;
use App\Logger;
use App\Webhook;
use App\WebhookHandler;

$webhook = new Webhook();
$webhookHandler = new WebhookHandler();

/**
 * Edit this script so that Logger::info() is always called
 * AT THE END even if a WebhookException is thrown
 */
try {
    $webhookHandler->handle($webhook);
} catch (WebhookException $exception) {
    Logger::error($exception->getMessage());
    throw new Exception("Unable to handle webhook");
}

Logger::info("All webhooks processed..");



