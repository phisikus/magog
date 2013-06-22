<?php
/**
 * Created by JetBrains PhpStorm.
 * User: micmax93
 */
class SecureLoginManager extends LoginManager
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function randString($len)
    {
        $str = '';
        for ($i = 0; $i < $len; $i++) {
            $str = $str . chr(rand(40, 120));
        }
        return $str;
    }

    function encodeString($str)
    {
        $str2 = '';
        for ($i = 0; $i < strlen($str); $i++) {
            $ch = substr($str, $i, 1);
            $str2 = $str2 . $ch . chr(ord($ch) + ((strlen($str) % ($i + 2)) % 5) - 2);
        }
        $hash = crypt($str2, strrev($str));
        return $hash;
    }

    public function getVerify($uid)
    {
        $str = $this->randString(10);
        $this->conn_list[$uid]['auth'] = $this->encodeString($str);
        $this->sendData($uid, ['code' => $str]);
        //$this->say("Sending verification code: $str");
    }

    public function registerUser($sender, $auth, $user, $hash)
    {
        if (isset($this->conn_list[$sender]['auth'])) {
            if ($this->conn_list[$sender]['auth'] == $auth) {
                $this->register($user, $hash);
            } else {
                $this->say("Invalid auth hash, expected: " . $this->conn_list[$sender]['auth']);
            }

        }
    }
}