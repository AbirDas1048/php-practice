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

class TightlyCoupledStudentManager{
    function introduceStudent($firstName, $lastName){
        $st = new Student($firstName, $lastName);
        $st->display();
    }
}

$sm = new TightlyCoupledStudentManager();
$sm->introduceStudent("Jim", "Jack");

class LooselyCoupledStudentManager{
    function introduceStudent($student): void
    {
        $student->display();
    }
}
$st = new Student("John", "Doe");
$sm = new LooselyCoupledStudentManager();
$sm->introduceStudent($st);