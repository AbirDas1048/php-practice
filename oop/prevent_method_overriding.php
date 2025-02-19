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
     * For final keyword method we can't override a method
     * Fatal error: Cannot override final method Member::logIn()
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


final class Exam
{
    // This class can't be extended at all
}

/***
 * prevent class Inheritance
 * This will return fatal error.
 * Because Exam class declare as final keyword.
 * For final keyword class we can't inherit to another class
 * Fatal error: Class Quiz cannot extend final class Exam
 */

//class Quiz extends Exam
//{
//// Will show Fatal Error
//}
