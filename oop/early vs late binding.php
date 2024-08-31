<?php
class Planet{
    public static function echoNameByEarlyBinding(){
        echo self::getName();
    }

    public static function echoNameByLateBinding(){
        echo static::getName();
    }

    public static function getName(){
        return 'Planet';
    }
}

class Earth extends Planet{
    public static function getName()
    {
        return 'Earth';
    }
}

Earth::echoNameByEarlyBinding();
echo PHP_EOL;
Earth::echoNameByLateBinding();