<?php

class ScServer implements SocketFace
{
    protected mixed $host;
    protected mixed $port;
    protected  mixed $socket;
    protected  mixed $client;
    function __construct($host = null, $port = null)
    {
        $this->host = $host;
        $this->port = $port;

    }
    public function setIp(string $ip) : void
    {
        $this->host = $ip;
    }
    public function setPort(int $port) : void
    {
       $this->port = $port;
    }

    public function createServer() : void
    {
        $this->socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        socket_bind($this->socket, $this->host, $this->port);
        socket_listen($this->socket, 3);
    }

    public  function  responseSocket() : void
    {
        $this->client = socket_accept($this->socket);
        $input = socket_read($this->client, 1024);
        socket_write($this->client, $input);
        socket_close($this->client);
    }
    public function request(string $request): object
    {
       return (object) [];
    }
}
