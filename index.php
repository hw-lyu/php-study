<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Component\Cache\Psr16Cache;
use Psr\SimpleCache\InvalidArgumentException;

$redis = new \Redis();
try {
    $redis->connect(host: 'redis', port: 13000);

    $adapter = new RedisAdapter($redis);
    $redisCache = new Psr16Cache($adapter);

    $redisCache->set(key: 'a', value: 1);
    $redisCache->setMultiple(['b' => '', 'c' => '']);

    print_r($redisCache->get('a'));
    print_r($redisCache->getMultiple(['b', 'c']));

} catch (InvalidArgumentException $e) {
    return $e->getMessage();
}


