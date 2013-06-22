#!/php -q
<?php
require_once("ws_lib/websocket.server.php");
require("manager.php");


class SecureBroadcastServer implements IWebSocketServerObserver {

    protected $debug = true;
    protected $server;

    public function __construct() {
        $this->server = new WebSocketServer("ssl://0.0.0.0:12345", 'superdupersecretkey');
        $this->server->addObserver($this);

        $this->interpreter=new CommunicationInterpreter();

        $this->setupSSL();
    }

    private function getPEMFilename() {
        return './democert.pem';
    }

    public function setupSSL() {
        $context = stream_context_create();

        // local_cert must be in PEM format
        stream_context_set_option($context, 'ssl', 'local_cert', $this->getPEMFilename());

        stream_context_set_option($context, 'ssl', 'allow_self_signed', true);
        stream_context_set_option($context, 'ssl', 'verify_peer', false);

        $this->server->setStreamContext($context);
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

// Start server
$server = new SecureBroadcastServer("ssl://0.0.0.0:12345");
$server->run();
