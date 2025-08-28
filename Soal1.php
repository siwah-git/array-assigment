<?php

/**
 * class Question1
 * This class is used to perform simple operations on arrays of numbers,
 * sorting ascending
 * get top three
 * average top three
 */
class Question1 {
    /**
     * 
     * @var array $num
     * store numbers in array form
     */
    public $num;

    /**
     * constructor
     *
     * @param  array $number
     */
    public function __construct(array $number) {//save number data into class
        $this->num = $number;

    }

    /**
     * sortAscending
     * sort numbers from smallest to largest
     *
     * @return void
     */
    public function sortAscending() {
        sort($this->num); //sort numbers from smallest to largest from $num
        return $this->num;
    }

    /**
     * getTopThree
     * take the 3 largest numbers
     */

    public function getTopThree(){
        $this->sortAscending(); //ensure that the numbers are in order from smallest to smallest
        return array_slice($this->num, -3);
    }

    /**
     * averageTopThree
     *
     * @return void
     */
    public function averageTopThree(){
        $topThree = $this->getTopThree(); //take the 3 highest numbers
        $sum = array_sum($topThree); //add up the 3 highest numbers
        return $sum / count($topThree);//average of the highest 3 digits
    }
}
    
?>