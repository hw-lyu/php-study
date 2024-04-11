<?php
// Prepend a base path if Predis is not available in your "include_path".
require 'vendor/autoload.php';
require 'vendor/predis/predis/autoload.php';

$client = new Predis\Client([
    'host' => 'redis',
    'port' => 13000
]);

try {
    $client->set('dd', 'dd2');
} catch (Predis\Connection\ConnectionException $exception) {
    var_dump($exception);
}