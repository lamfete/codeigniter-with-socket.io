<?php

class redis {
    function config() {
        $client = new Predis\Client([
            'scheme' => 'tcp',
            'host' => '127.0.0.1',
            // 'host' => '192.168.1.8',
            'port' => 6379,
            'database' => 1
        ]);

        return $client;
    }

    function handle() {
        $client = new Predis\Client([
            'scheme' => 'tcp',
            'host' => '127.0.0.1',
            // 'host' => '192.168.1.8',
            'port' => 6379,
            'database' => 1
        ]);

        $handler = new Predis\Session\Handler($client);
        return $handler;
    }
}