<?php

class Fizz {
    public function _construct($num)
    {
        $this->num = $num;
    }
    
    public function fizz()
    {
        if($num % 3 === 0){
            echo "Fizz\n";
        }
    }
}

class Bazz {
    public function _construct($num)
    {
        $this->num = $num;
    }

    public function bazz()
    {
        if($num % 5 === 0){
            echo "Bazz\n";
        }
    }
}

class FizzBazz {
    public function _construct($num)
    {
        $this->num = $num;
    }
    
    public function fizzbazz()
    {
        if($num % 3 === 0 && $num % 5 === 0){
            echo "FizzBazz\n";
        }
    }
}


