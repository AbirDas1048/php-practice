<?php

class StudentException
{
    public mixed $age;
    public mixed $name;

    public function __construct($name, $age)
    {
        $this->name = $name;
        if($age < 4){
            throw new Exception('Too Young', 1001);
        }elseif ($age > 35){
            throw new Exception('Too Old', 1005);
        }else{
            $this->age = $age;
        }
    }
}

try {
    $student = new StudentException('Abir', 3);
    echo $student->name . PHP_EOL;
    echo $student->age . PHP_EOL;
}catch (Exception $exception){
    echo $exception->getCode().PHP_EOL;
    echo $exception->getFile().PHP_EOL;
    echo $exception->getMessage().PHP_EOL;
    echo $exception->getTraceAsString().PHP_EOL;
    echo $exception->getLine().PHP_EOL;
    echo $exception->getPrevious().PHP_EOL;
    print_r($exception->getTrace());
    echo PHP_EOL;
} finally {
    echo "Executed".PHP_EOL;
}

