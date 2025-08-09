<?php

//fastest server
$servers = new SplMinHeap();
$servers->insert(80);
$servers->insert(30);
$servers->insert(43);
echo 'Min: ' . $servers->top() . PHP_EOL;

readonly class Server
{

    public function __construct(
        private string $name,
        private string $ip,
        private int $latency
    ) {
    }

    public function getLatency(): int
    {
        return $this->latency;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        return (string)$this->latency;
    }
}

class FastestServer extends SplMinHeap
{
    protected function compare($value1, $value2): int
    {
        return $value2->getLatency() <=> $value1->getLatency();
    }
}

$server1 = new Server('server500', '127.0.0.1', 100);
$server2 = new Server('server2', '127.0.0.2', 200);
$server3 = new Server('server3', '127.0.0.3', 300);
$servers = new FastestServer();
$servers->insert($server1);
$servers->insert($server2);
$servers->insert($server3);
echo 'Min: ' . $servers->top()->getName() . PHP_EOL;
