<?php
class Bank{
    public $first_name;
    public $last_name;
    public $dob;
    public $address;
    private $mobile_no;
    private $email;
    private $balance;

    private $pin;

    function __construct($first_name, $last_name, $dob, $mobile_no, $pin, $balance = 0){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->dob = $dob;
        $this->mobile_no = $mobile_no;
        $this->pin = $pin;
        $this->balance = $balance;
    }

    public function getPublicInfo(): void{
        echo "Username is $this->first_name $this->last_name.\n";
        echo "Date of birth is $this->dob.\n";
        echo $this->address ? "Address is $this->address.\n" : "No address is set\n";
    }

    public function setEmail($email): void{
        $this->email = $email;
    }

    public function getPrivateInfo($pin = '',$isShowBalance = false): void{
        echo "Mobile no is $this->mobile_no.\n";
        echo $this->email ? "Email is $this->email.\n" : "No email is set.\n";

        if($isShowBalance){
            if($pin != '' && $this->pin == $pin){
                $this->getBalance();
            }else{
                echo "Pin is wrong.\n";
            }
        }
    }

    public function deposit($amount): void{
        $this->balance += $amount;
    }

    public function withdraw($amount): void{
        $this->balance -= $amount;
    }

    private function getBalance(): void{
        echo "Total balance is $this->balance.\n";
    }
}

$acc1 = new Bank('Abir', 'Das', '31-10-1995', '01....51', '1048');
$acc2 = new Bank('James', 'Bond', '01-01-1980', '01....11', '007', 500);

$acc1->getPublicInfo();
$acc1->getPrivateInfo();

$acc1->address = 'Chittagong';
$acc1->setEmail('abir...@gmail.com');

echo PHP_EOL;

$acc1->getPublicInfo();
$acc1->deposit(500);
$acc1->getPrivateInfo();

echo PHP_EOL;

$acc1->getPrivateInfo('1048', true);
$acc1->deposit(500);
$acc1->deposit(100);
$acc1->getPrivateInfo('1012', true);
$acc1->withdraw(100);
$acc1->getPrivateInfo('1048', true);

echo PHP_EOL;

$acc2->getPublicInfo();
$acc2->getPrivateInfo();

$acc2->address = 'USA';
$acc2->setEmail('james...@gmail.com');

echo PHP_EOL;

$acc2->getPublicInfo();
$acc2->deposit(500);
$acc2->getPrivateInfo();

echo PHP_EOL;

$acc2->getPrivateInfo('007', true);

echo PHP_EOL;

$acc2->withdraw(100);
$acc1->deposit(500);

$acc1->getPrivateInfo('1048', true);
$acc2->getPrivateInfo('007', true);