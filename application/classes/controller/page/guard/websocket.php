<?php
/**
 * Created by JetBrains PhpStorm.
 * User: micmax93
 * Date: 03.04.13
 */
require("lib.websocket.php");

class SimpleWebSocketClient
{
    public $socket;
    public $isOpen;

    public function __construct($addr = "ws://127.0.0.1:12345/echo/")
    {
        $this->socket = new WebSocket($addr);
        $this->isOpen = true;

        try {
            $this->socket->open();
        } catch (Exception $exception) {
            //echo $exception->getMessage();
            $this->isOpen = false;
        }
    }

    public function __destruct()
    {
        if (!$this->isOpen) {
            return;
        }
        $this->socket->close();
    }

    public function sendMsg($msg)
    {
        if (!$this->isOpen) {
            return;
        }
        $ws_msg = WebSocketMessage::create($msg);
        $this->socket->sendMessage($ws_msg);
    }

    public function recvMsg()
    {
        if (!$this->isOpen) {
            return;
        }
        $msg = $this->socket->readMessage();
        return $msg->getData();
    }
}

class WebSocketController
{
    public $ws;
    public $adminCode='', $adminHash='';
    public $group;

    function encodeString($str)
    {
        $str2='';
        for($i=0;$i<strlen($str);$i++)
        {
            $ch=substr($str,$i,1);
            $str2= $str2 . $ch . chr(ord($ch)+((strlen($str)%($i+2))%5)-2);
        }
        $hash=crypt($str2,strrev($str));
        return $hash;
    }

    function makeJsonMsg($cmd, $args=array())
    {
        $msg['group'] = $this->group;
        $msg['cmd'] = $cmd;
        $msg['args'] = $args;
        $msg['args']['auth'] = $this->adminHash;
        return json_encode($msg);
    }

    public function __construct($group)
    {
        $this->ws = new SimpleWebSocketClient();
        if (!$this->ws->isOpen) {
            throw new Exception('WebSocket: Unable to open connection!');
        }
        $this->group=$group;
    }

    function get_verification()
    {
        $this->ws->sendMsg($this->makeJsonMsg('get_verify'));
        $msg = json_decode($this->ws->recvMsg());
        $this->adminCode = $msg->code;
        $this->adminHash = $this->encodeString($this->adminCode);
    }

    public function register($uname, $hash)
    {
        $this->get_verification();
        $data['user']=$uname;
        $data['hash']=$hash;
        $msg = $this->makeJsonMsg('register', $data);
        $this->ws->sendMsg($msg);
    }

    public function get_update($uname, $hash)
    {
        $data['user']=$uname;
        $data['hash']=$hash;
        $msg = $this->makeJsonMsg('update', $data);
        $this->ws->sendMsg($msg);
        return $this->ws->recvMsg();
    }


}