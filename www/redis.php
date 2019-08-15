<?php
ini_set('display_error', 'On');
if (!extension_loaded('redis')) {
    throw new Exception('NO REDIS EXT');
} else {
    $redis = new Redis();
    $redis->connect(redis, 6379);
    $redis->set('test', 'Hello World !');
    echo $redis->get('test');
}
