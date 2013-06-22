<?php
/**
 * Created by JetBrains PhpStorm.
 * User: micmax93
 */
class LoginManager extends ConnectionManager
{
    protected $user_list;

    public function __construct()
    {
        $this->user_list = new UserList();
    }

    function sendList($cid)
    {
        $data['cmd'] = 'list';
        $data['args'] = $this->user_list->getList();
        $this->sendData($cid, $data);
    }

    function bcastUpdate($user, $action)
    {
        $data['cmd'] = 'update';
        $data['args']['user'] = $user;
        $data['args']['action'] = $action;
        $data['args']['time'] = $this->user_list->getTime($user);
        $this->bcastData($data, $user);
    }

    public function closeConnection($cid)
    {
        $this->logout($cid);
        parent::closeConnection($cid);
    }

    protected function register($name, $hash)
    {
        $this->user_list->register($name, $hash);
        $this->say("Register user $name");
    }

    public function login($sender, $name, $hash)
    {
        if ($this->user_list->login($name, $hash)) {
            $this->conn_list[$sender]['name'] = $name;
            $this->sendList($sender);
            $this->bcastUpdate($name, 'login');
            $this->say("Login user $name");
        }
    }

    public function update($sender, $name, $hash)
    {
        if ($this->user_list->update($name, $hash)) {
            $this->sendList($sender);
            $this->bcastUpdate($name, 'update');
            $this->say("Update user $name");
        }
    }

    public function logout($cid)
    {
        if (($user = $this->getUname($cid)) != null) {
            $this->user_list->logout($user);
            $this->bcastUpdate($user, 'logout');
            $this->say($user . ' logout');
        }
    }
}