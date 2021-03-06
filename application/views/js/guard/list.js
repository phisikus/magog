/**
 * Created with JetBrains PhpStorm.
 * User: micmax93
 */

var active = {};
var delayed = {};
var lastUpdate = new Date().getTime() / 1000;

function updateTimeouts() {
    var currTime = new Date().getTime() / 1000;
    var diff = currTime - lastUpdate;
    for (u in active) {
        if (active[u]['actv'] != 'inf') {
            active[u]['actv'] -= diff;
            active[u]['remv'] -= diff;
        }
    }
    for (u in delayed) {
        delayed[u]['actv'] -= diff;
        delayed[u]['remv'] -= diff;
    }
    lastUpdate = currTime;
}

function refreshList() {
    updateTimeouts();
    for (u in active) {
        if ((active[u]['actv'] != 'inf') && (active[u]['actv'] <= 0)) {
            delayed[u] = active[u];
            delete active[u];
            setUserStyle(u, 'delayedUser');
        }
    }
    for (u in delayed) {
        if (delayed[u]['remv'] <= 0) {
            delete delayed[u];
            removeUserView(u);
        }
    }

    if (areAnyOtherUsers())
        markDraftProposition();
    else
        unmarkDraftProposition();
}

function userUpdate(user, action, times) {
    if ($('#user_' + user).length == 0) {
        showNewUser(user, "");
    }
    if (user in active) {
        delete active[user];
    }
    if (user in delayed) {
        delete delayed[user];
    }
    updateTimeouts();
    if ((action == 'login') || (action == 'update')) {
        active[user] = times;
        setUserStyle(user, "activeUser");
    }
    if (action == 'logout') {
        delayed[user] = times;
        setUserStyle(user, "delayedUser");
    }
}

function showNewUser(name, css) {
    $('#currentEditors').append('<li class="' + css + '" id="user_' + name + '">' + name + "</li>");
}
function setUserStyle(name, css) {
    $('#user_' + name).removeClass().addClass(css);
}

function removeUserView(name) {
    $('#user_' + name).remove();
}

function repaintList() {

    $('#currentEditors li').remove();
    for (u in active) {
        showNewUser(u, 'activeUser');
    }
    for (u in delayed) {
        showNewUser(u, 'delayedUser');
    }

    if (areAnyOtherUsers())
        markDraftProposition();
    else
        unmarkDraftProposition();
}

function areAnyOtherUsers() {
    if ($('#currentEditors li').size() > 1)
        return true;
    else
        return false;
}
