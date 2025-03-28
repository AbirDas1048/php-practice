<?php

/***
 * Dependency Injection (DI)
 * is a design pattern that promotes loose coupling by injecting dependencies into a class instead of hardcoding them.
 * It helps improve maintainability, testability, and flexibility in applications.
 * In traditional programming, when a class needs to use another class or object,
 * it directly creates or instantiates the required object within itself.
 * This creates a tight coupling between classes, making them dependent on each other.
 * This can lead to several issues such as code that is hard to maintain,
 * difficult to test in isolation, and limited flexibility in changing dependencies.
 */


/***
 * Types of DI, How it Works, Pros, Cons
 *
 * Constructor Injection
 * How it Works: Dependencies passed via constructor.
 * Pros: Ensures dependencies are always set, immutable.
 * Cons: Less flexible.
 *
 * Setter Injection
 * How it Works: Dependencies set via setter methods.
 * Pros: More flexible, dependencies can be changed.
 * Cons: Risk of missing dependencies.
 *
 * Interface Injection
 * How it Works: Forces dependency injection via an interface.
 * Pros: Enforces structured dependency injection.
 * Cons: More complex.
 */

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