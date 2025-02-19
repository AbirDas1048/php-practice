<?php
class Member
{
    public $user_name = '';
    protected $is_logged_in = false;

    public final function logIn(): void
    {
        $this->is_logged_in = true;
    }

    public function logOut(): void
    {
        $this->is_logged_in = false;
    }

}

class Admin extends Member{

    /***
     * This will return fatal error.
     * Because in parent class logIn method declare as final keyword.
     * For final keyword we can't override a method
     */
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