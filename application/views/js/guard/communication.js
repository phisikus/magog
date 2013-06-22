/**
 * User: micmax93
 */

function sendMsg(cmd, args) {
    var data = {'cmd': cmd, 'group': myGroup, 'args': args};
    webSocket.send(JSON.stringify(data));
}

function login() {
    sendMsg('login', {'user': myName, 'hash': myHash});
}


function update() {
    var args = {};
    args['uname'] = myName;
    args['hash'] = myHash;
    args['group'] = myGroup;
    jQuery.post(baseUrl + "index.php/page/admin/sendGuardUpdate", args, function (data) {
        active = data['args']['active'];
        delayed = data['args']['delayed'];
        repaintList();
    });
}

function setupRefresh(timeout) {
    window.setInterval(function () {
        refreshList();
        //repaintList();
    }, timeout);
}


function onMessage(evt) {
    data = jQuery.parseJSON(evt.data);
    if (data['cmd'] == 'list') {
        active = data['args']['active'];
        delayed = data['args']['delayed'];
        repaintList();
        setupRefresh(1000);
    }
    else if (data['cmd'] == 'update') {
        userUpdate(data['args']['user'], data['args']['action'], data['args']['time']);
        //repaintList();
    }
}
