<?php

/***
 * Serialize() returns a string containing a byte-stream representation of any value that can be stored in PHP.
 * Unserialize() can use this string to recreate the original variable values.
 * Using serializing to save an object will save all variables in an object.
 * The methods in an object will not be saved, only the name of the class.
 */

class A {
    public $one = 1;

    public function show_one(): void
    {
        echo $this->one;
    }
}

$a = new A();
$s = serialize($a);
// store $s somewhere where page2.php can find it.
echo "Converted the A to a string: $s \n";

class Member
{
    public $username = "";
    private $loggedIn = false;

    public function login() {
        $this->loggedIn = true;
    }

    public function logout() {
        $this->loggedIn = false;
    }

    public function isLoggedIn() {
        return $this->loggedIn;
    }
}

$member = new Member();
$member->username = "Abir";
$member->login();

$memberString = serialize($member);
echo "Converted the Member to a string: $memberString \n";

$member2 = unserialize( $memberString );
echo "After unserialize\n" . $member2->username . " is " . ( $member2->isLoggedIn() ? "logged in" : "logged out" ) . PHP_EOL;
