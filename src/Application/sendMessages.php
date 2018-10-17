<?php
/**
 * Created by PhpStorm.
 * User: smoreno
 * Date: 17/10/18
 * Time: 9:52
 */

namespace Application;

// This is our new stuff
$context = new \ZMQContext();
$socket = $context->getSocket(\ZMQ::SOCKET_PUSH, 'onBlogEntry');
$socket->connect("tcp://172.30.1.67:5555");

$socket->send(json_encode(['category' => 'Live', 'value' => true]));
$socket->send(json_encode(['category' => 'Tags', 'value' => 'Crashes']));