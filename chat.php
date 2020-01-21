<?php

require './vendor/autoload.php';

use Chat\ChatServer;

$app = new Ratchet\App('localhost', 9990);
$app->route('/chat', new ChatServer, ['*']);
$app->run();
