<?php
/**
 * Created by JetBrains PhpStorm.
 * User: micmax93
 */
class UserList
{
    protected $user_list = array();
    protected $online_list = array();
    protected $proxy_list = array();

    protected $proxy_delay = 6;
    protected $removal_delay = 6;

    public function register($name, $hash)
    {
        $this->refresh();
        $this->user_list[$name] = $hash;
    }

    function isValid($name, $hash = null)
    {
        if (isset($this->user_list[$name])) {
            if (($hash == null) or ($hash == $this->user_list[$name])) {
                return true;
            }
        }
        return false;
    }

    public function login($name, $hash)
    {
        $this->refresh();
        if ($this->isValid($name, $hash)) {
            $this->online_list[$name] = 'inf';
            if (isset($this->proxy_list[$name])) {
                unset($this->proxy_list[$name]);
            }
            return true;
        }
        return false;
    }

    public function logout($name)
    {
        $this->refresh();
        if ($this->isValid($name)) {
            $this->online_list[$name] = time();
            return true;
        }
        return false;
    }

    public function update($name, $hash)
    {
        $this->refresh();
        if ($this->isValid($name, $hash)) {
            if (isset($this->online_list[$name])) {
                unset($this->online_list[$name]);
            }
            $this->proxy_list[$name] = time();
            return true;
        }
        return false;
    }

    public function refresh()
    {
        $time = time();
        foreach ($this->online_list as $name => $val) {
            if ($val != 'inf') {
                if ($time - $val > $this->removal_delay) {
                    unset($this->online_list[$name]);
                }
            }
        }
        foreach ($this->proxy_list as $name => $val) {
            if ($time - $val > $this->proxy_delay + $this->removal_delay) {
                unset($this->proxy_list[$name]);
            }
        }
    }

    public function getTime($name)
    {
        $time = time();
        $this->refresh();
        if (isset($this->online_list[$name])) {
            if ($this->online_list[$name] == 'inf') {
                return array('actv' => 'inf', 'remv' => 'inf');
            } else {
                $lag = $this->removal_delay - ($time - $this->online_list[$name]);
                return array('actv' => 0, 'remv' => $lag);
            }
        } else if (isset($this->proxy_list[$name])) {
            $lag = $time - $this->proxy_list[$name];
            $actv = $this->proxy_delay - $lag;
            $remv = $this->proxy_delay + $this->removal_delay - $lag;

            if ($actv > 0) {
                return array('actv' => $actv, 'remv' => $remv);
            } else {
                return array('actv' => 0, 'remv' => $remv);
            }
        } else return array('actv' => 0, 'remv' => 0);
    }

    public function getList()
    {
        $time = time();
        $this->refresh();
        $active = array();
        $delayed = array();
        foreach ($this->online_list as $name => $val) {
            if ($val == 'inf') {
                $active[$name] = array('actv' => 'inf', 'remv' => 'inf');
            } else {
                $lag = $this->removal_delay - ($time - $val);
                $delayed[$name] = array('actv' => 0, 'remv' => $lag);
            }
        }
        foreach ($this->proxy_list as $name => $val) {
            $lag = $time - $val;
            $actv = $this->proxy_delay - $lag;
            $remv = $this->proxy_delay + $this->removal_delay - $lag;

            if ($actv > 0) {
                $active[$name] = array('actv' => $actv, 'remv' => $remv);
            } else {
                $delayed[$name] = array('actv' => 0, 'remv' => $remv);
            }
        }
        $list['active'] = $active;
        $list['delayed'] = $delayed;
        return $list;
    }

    public function getActiveUsers()
    {
        $this->refresh();
        $list = array();
        foreach ($this->online_list as $name => $val) {
            if ($val == 'inf') {
                array_push($list, $name);
            }
        }
        return $list;
    }
}