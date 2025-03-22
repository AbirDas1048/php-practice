<?php
class StringUtility
{
    private $string;
    private $search;
    public function __construct($string){
        $this->string = $string;
    }

    public function search($search_string){
        if(!str_contains($this->string, $search_string)){
            throw new Exception("Nothing found with that search string");
        }

        $this->search = $search_string;
        return $this;
    }

    public function replace($replace_string){
        if(!isset($this->search)){
            throw new Exception("Nothing to replace");
        }

        $this->string = str_replace($this->search, $replace_string, $this->string);
        return $this;
    }

    public function upperCase(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function lowerCase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    public function show()
    {
        echo $this->string . PHP_EOL;
    }
}

$str = new StringUtility('Jane Doe');

$str->search('Doe')->replace('Das')->show();

$str->upperCase()->show();

$str->lowerCase()->show();

$str->search('jane')->replace('Abir')->show();