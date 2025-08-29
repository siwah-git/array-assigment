<?php

/**
 * class Question4
 * display number form $numbers
 * filter even numbers from an array,
 * perform multiplication operations on even numbers.
 * 
 */
class Question4 {
    /**
     * $numbers
     *
     * @var array $numbers
     * store numbers in array form
     */
    private $numbers;

    /**
     * constructor
     *
     * @param  array $number
     */
    public function __construct(array $number) {//Save the number data into the property class
        $this->numbers = $number;
    }
    /**
     * filterEven
     *Filters and returns even numbers from the $numbers array.

     * @return array list of even numbers
     * 
     */
    public function filterEven(){
    return array_filter($this->numbers, function($number) { //filter numbers
        return $number % 2 == 1;//only take numbers that are divisible by 2
    });
}
    /**
     * multipliedBy3
     * take even numbers form filterEven();
     * multiply it by 3 using array_map.
     *
     * @return array number 
     */
    public function multipliedBy3(){
        $evenNumbers = $this->filterEven(); // take even numbers
        return array_map(function($number) {
            return $number * 3;//multiply each even number by 3
        }, $evenNumbers);
    }
}




?>