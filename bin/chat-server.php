<?php
/**
 * Created by PhpStorm.
 * User: smoreno
 * Date: 16/10/18
 * Time: 15:29
 */

use Ratchet\Server\IoServer;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new \Domain\Chat(),
    1339
);

$server->run();