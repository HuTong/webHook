<?php
$payloadJson = $_POST['payload'] ?? '';
$payload = json_decode($payloadJson, true);
$name = $payload['repository']['name'];

$path = '/var/www/saas/' . $name;

echo exec("sudo /var/www/webHook/data/pull.sh {$path}");
