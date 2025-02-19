<?php
class Member
{
    public $user_name = '';
    protected $is_logged_in = false;

    public function logIn(): void
    {
        $this->is_logged_in = true;
    }

    public function logOut(): void
    {
        $this->is_logged_in = false;
    }

}

class Admin extends Member{
    public function logIn(): void
    {
        $this->is_logged_in = true;
        echo "Log entry: $this->user_name is login";
    }
}

$member = new Member();
$member->logIn();
$member->logOut();

$admin = new Admin();
$admin->user_name = "Abir";
$admin->logIn();
$admin->logOut();