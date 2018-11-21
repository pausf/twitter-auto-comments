<?php

require __DIR__ . '/../vendor/autoload.php';

use React\Http\Server;
use React\Http\Response;
use React\EventLoop\Factory;
use Psr\Http\Message\ServerRequestInterface;

$loop = Factory::create();
$server = new Server(function (ServerRequestInterface $request) use (&$tasks) {
    $path = $request->getUri()->getPath();
    $method = $request->getMethod();

    if ($path === '/favorite/tweet') {
        if ($method === 'GET') {
            return new Response(200, ['Content-Type' => 'text/plain'],  implode(PHP_EOL, $tasks));
        }

    }

    return new Response(404, ['Content-Type' => 'text/plain'],  'Not found');
});

$socket = new \React\Socket\Server('127.0.0.20:8300', $loop);
$server->listen($socket);

echo 'Listening on ' . str_replace('tcp:', 'http:', $socket->getAddress()) . "\n";

$loop->run();