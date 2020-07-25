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
    
    private function fizzbuzz()
    {
        if($this->num % 3 === 0 && $this->num % 5 === 0){
            return true;
        }
    }

    public function judgeFizzBuzz()
    {
        if($this->fizzbuzz()){
            echo "FizzBuzz\n";
        }elseif($this->fizz()){
            echo "Fizz\n";
        }elseif($this->buzz()){
            echo "Buzz\n";
        }else{
            echo $this->num."\n";
        }
    }
}

for($i=1;$i<=25;$i++){
    $checker = new Checker($i);    
    $checker->judgeFizzBuzz();

    unset($fizzbuzz);
}
