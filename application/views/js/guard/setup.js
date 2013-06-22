/**
 * Created with JetBrains PhpStorm.
 * User: micmax93
 */


var myHash;

// Get authorization hash for websocket/AJAX connection
function guardRegister(addr) {
    var args = {'group': myGroup};
    jQuery.post(baseUrl + "index.php/page/admin/getGuardHash", args, function (data) {
        myName = data['uname'];
        myHash = data['hash'];

        setupWebSocket();
    });
}

function setupGuard() {
    guardRegister();
    //setupWebSocket();
}

var webSocket = null;
function setupWebSocket() {
    stopAsyncUpdate();
    if (webSocket != null) {
        return;
    }
    if ("WebSocket" in window) {
        webSocket = new WebSocket("ws://" + window.location.host + ":12345/echo");
    }
    else {
        setupAsyncUpdate();
    }
    webSocket.onopen = function (evt) {
        login();
    };
    webSocket.onclose = function (evt) {
        //onClose(evt)
    };
    webSocket.onmessage = function (evt) {
        onMessage(evt);
    };
    webSocket.onerror = function (evt) {
        //onError(evt);
        setupAsyncUpdate();
    };
}

function closeWebSocket() {
    if (webSocket != null) {
        webSocket.close();
        webSocket = null;
    }
}


var int_update = null;
function setupAsyncUpdate() {
    closeWebSocket();
    if (int_update == null) {
        update();
        if (int_update == null) {
            int_update = window.setInterval(update, 5000);
        }
    }
}
function stopAsyncUpdate() {
    if (int_update != null) {
        window.clearTimeout(int_update);
        int_update = null;
    }
}
