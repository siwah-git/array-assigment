<?php

class Question4 {
    private $numbers;


    public function __construct(array $number) {
        $this->numbers = $number;
    }
    
    public function filterEven(){
    return array_filter($this->numbers, function($number) { //method that will display only even numbers
        return $number % 2 == 0;
    });
}

     public function multipliedBy3(){
        $evenNumbers = $this->filterEven(); // ambil angka genap dulu
        return array_map(function($number) {
            return $number * 3;
        }, $evenNumbers);
    }
}




?>