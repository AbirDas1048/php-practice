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

    public function greet(): void
    {
        echo 'Welcome'.PHP_EOL;
    }

}

class Admin extends Member{
    public function logIn(): void
    {
        $this->is_logged_in = true;
        echo "Log entry: $this->user_name is login";
    }

    public function greet(): void{
        parent::greet();
        echo "Hi, This is $this->user_name".PHP_EOL;
    }
}

$member = new Member();
$member->logIn();
$member->logOut();
$member->greet();

$admin = new Admin();
$admin->user_name = "Abir";
$admin->logIn();
$admin->logOut();
$admin->greet();