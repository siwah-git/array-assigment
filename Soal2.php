<?php
/**
 * class Question2
 * sort the fruit in an array
 * count how many times the fruit appears
 * displays the most frequently appearing fruits
 */
class Question2 {
    /**
     *
     * @var array $fruit
     * store the fruit in the form of an array
     */
    private $fruit;

    /**
     * constructor
     *
     * @param  array $fruits
     */
    public function __construct(array $fruits) { //save fruit data into class
        $this->fruit = $fruits;

    }
    /**
     * fruitFrequency
     * displays the fruit frequency, how many times the fruit appears
     *
     * @return array Array assosiatif 
     */
    public function fruitFrequency() {
        return array_count_values($this->fruit);//how many times the fruit appears
     
    }
    /**
     * mostFruit
     * displays frequently appearing fruits
     */

    public function mostFruit(){
        $frequency = $this->fruitFrequency();//determine how many times the fruit appears
        $highestAmount = max($frequency);//look for the fruit that appears most often
        return array_search($highestAmount, $frequency );//display the most fruit
    }
}

?>