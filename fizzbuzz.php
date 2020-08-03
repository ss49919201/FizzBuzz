<?php

class Checker
{
    private $num;

    public function __construct($num)
    {
        $this->num = $num;
    }
    
    private function fizz()
    {
        if($this->num % 3 === 0){
            return true;
        }
    }

    private function buzz()
    {
        if($this->num % 5 === 0){
            return true;
        }
    }

    public function judgeFizzBuzz()
    {
        if($this->fizz()){
            echo "Fizz";
        }
        if($this->buzz()){
            echo "Buzz";
        }
        if(!$this->fizz() && !$this->buzz())
        {
            echo $this->num;
        }

        echo PHP_EOL;
    }
}

for($i=1;$i<=25;$i++){
    $checker = new Checker($i);    
    $checker->judgeFizzBuzz();

    unset($fizzbuzz);
}
