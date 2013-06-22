<?php
require_once("ws_lib/websocket.server.php");

foreach (glob("manager/*.php") as $filename)
{
    require $filename;
}


class BroadcastServer implements IWebSocketServerObserver {

    protected $debug = true;
    protected $server;

    protected $interpreter;

    public function __construct() {
        $this->server = new WebSocketServer("tcp://0.0.0.0:12345", 'superdupersecretkey');
        $this->server->addObserver($this);

        $this->interpreter=new CommunicationInterpreter();
    }

    public function onConnect(IWebSocketConnection $user) {
        $this->say("{$user->getId()} connected");
        $this->interpreter->newChanel($user->getId(),$user);
    }

    public function onMessage(IWebSocketConnection $user, IWebSocketMessage $msg) {
        $this->say("{$user->getId()} says '{$msg->getData()}'");
        $this->interpreter->messageReceived($user->getId(),$msg->getData());
    }

    public function onDisconnect(IWebSocketConnection $user) {
        $this->say("{$user->getId()} disconnected");
        $this->interpreter->chanelDisconnected($user->getId());
    }

    public function onAdminMessage(IWebSocketConnection $user, IWebSocketMessage $msg) {
        $frame = WebSocketFrame::create(WebSocketOpcode::PongFrame);
        $user->sendFrame($frame);
    }

    public function say($msg) {
        echo '<COM>' . "$msg \r\n";
    }

    public function run() {
        $this->server->run();
    }

}


$server = new BroadcastServer();
$server->run();