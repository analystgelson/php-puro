<?php

define('APP_PATH', __DIR__. '/../');

include APP_PATH . 'lib/SplClassLoader.php';

$loader = new SplClassLoader('Guzzle','lib/vendor/guzzle/src');
$loader->register();

include APP_PATH . 'src/index.php';