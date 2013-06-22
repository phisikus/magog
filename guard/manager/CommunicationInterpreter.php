<?php
/**
 * Created by JetBrains PhpStorm.
 * User: micmax93
 */
class CommunicationInterpreter
{
    protected $manager = array();
    protected $chanels = array();

    function check($chanel,$group)
    {
        if (!isset($this->manager[$group])) {
            $this->manager[$group] = new SecureLoginManager();
        }
        if(!$this->manager[$group]->exists($chanel))
        {
            $this->manager[$group]->newConnection($chanel,  $this->chanels[$chanel]);
        }
    }

    public function newChanel($chanelId, $ws)
    {
        $this->chanels[$chanelId]=$ws;
    }

    public function chanelDisconnected($chanelId)
    {
        unset($this->chanels[$chanelId]);
        foreach($this->manager as $m)
        {
            $m->closeConnection($chanelId);
        }
    }

    function isValidStruct($data)
    {
        return (isset($data->cmd) and isset($data->args) and isset($data->group));
    }

    public function messageReceived($sender, $msg)
    {
        $data = json_decode($msg);
        if (!$this->isValidStruct($data)) {
            return;
        }

        $gid = $data->group;
        $this->check($sender, $gid);

        if ($data->cmd == 'register') {
            $this->manager[$gid]->registerUser($sender, $data->args->auth, $data->args->user, $data->args->hash);
        } else if ($data->cmd == 'get_verify') {
            $this->manager[$gid]->getVerify($sender);
        } else if ($data->cmd == 'login') {
            $this->manager[$gid]->login($sender, $data->args->user, $data->args->hash);
        } else if ($data->cmd == 'logout') {
            $this->manager[$gid]->logout($sender);
        } else if ($data->cmd == 'update') {
            $this->manager[$gid]->update($sender, $data->args->user, $data->args->hash);
        }
    }
}