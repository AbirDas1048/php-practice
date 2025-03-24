<?php
interface BaseStudent{
    public function display();
}

class Student implements BaseStudent{
    private $first_name;
    private $last_name;
    public function __construct($firstName, $lastName){
        $this->first_name = $firstName;
        $this->last_name = $lastName;
    }
    public function display(){
        echo "Hello $this->first_name $this->last_name" . PHP_EOL;
    }
}

class StudentMoreInfo implements BaseStudent{
    private $name;
    private $dob;
    private $class;
    private $email;
    private $contact;
    public function __construct($name, $dob, $class, $email, $contact){
        $this->name = $name;
        $this->dob = $dob;
        $this->class = $class;
        $this->email = $email;
        $this->contact = $contact;
    }
    public function display(){
        echo "My name is $this->name" . PHP_EOL;
        echo "My date of birth is $this->dob" . PHP_EOL;
        echo "I read in $this->class class" . PHP_EOL;
        echo "My email is $this->email" . PHP_EOL;
        echo "My contact no is $this->contact" . PHP_EOL;
    }
}

class TightlyCoupledStudentManager{
    function introduceStudent($firstName, $lastName){
        $st = new Student($firstName, $lastName);
        $st->display();
    }
}

echo "Result of tightly coupled" . PHP_EOL;
$sm = new TightlyCoupledStudentManager();
$sm->introduceStudent("Jim", "Jack");

class LooselyCoupledStudentManager{
    function introduceStudent(BaseStudent $student): void
    {
        $student->display();
    }
}

echo "Result of loosely coupled one" . PHP_EOL;
$st = new Student("John", "Doe");
$sm = new LooselyCoupledStudentManager();
$sm->introduceStudent($st);

echo "Result of loosely coupled two" . PHP_EOL;
$st = new StudentMoreInfo("Abir Das", "31/10/1995", 10, 'abir....@mail.com', '01.....');
$sm = new LooselyCoupledStudentManager();
$sm->introduceStudent($st);