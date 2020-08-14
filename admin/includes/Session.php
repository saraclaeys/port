<?php


class Session
{
    private $signed_in = false;
    public $users_id;
    public $count;

    function __construct()
    {
        session_start();
        $this->visitor_count();
        $this->check_the_login();
/*        $this->check_message();*/
    }

    public function visitor_count()
    {
        if (isset($_SESSION['count'])) {
            return $this->count = $_SESSION['count']--;
        } else {
            return $_SESSION['count'] = 1;
        }
    }

    public function is_signed_in()
    {
        return $this->signed_in;
    }

    public function login($users)
    {
        if ($users) {
            $this->users_id = $_SESSION['users_id'] = $users->id;
            $this->signed_in = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['users_id']);
        unset($this->users_id);
        $this->signed_in = false;
    }

    private function check_the_login()
    {
        if (isset($_SESSION['users_id'])) {
            $this->users_id = $_SESSION['users_id'];
            $this->signed_in = true;
        } else {
            unset($this->users_id);
            $this->signed_in = false;
        }
    }

/*    public function message($msg = "")
    {
        if (!empty($msg)) {
            $_SESSION['message'] = $msg;
        } else {
            return $this->message;
        }
    }

    private function check_message()
    {
        if (isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }
    }*/
}

$session = new Session();

?>