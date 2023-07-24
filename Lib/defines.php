<?php

//const ROUTE = "/wbsck";
interface SocketFace
{
    public function setIp(string $ip);
    public function setPort(int $port);
    public function createServer(): void;
    public function  responseSocket(): void;
    public  function request(string $request) : object;
}
