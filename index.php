<?php
require_once "./Lib/defines.php";
require_once "./Lib/socket.php";
set_time_limit(0);
class SimpleSocket extends ScServer
{
    function  __construct($host = null, $port = null)
    {
        parent::__construct($host, $port);
    }

    public function run()
    {
            $this->createServer();
            $this->responseSocket();
    }

}

$server = new SimpleSocket("127.0.0.1", 2701);
$server->run();
