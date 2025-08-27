<?php

class Question2 {
    private $fruit;

    public function __construct(array $fruits) {
        $this->fruit = $fruits;

    }

     public function sortAscending() {
        sort($this->fruit);
        return $this->fruit;
    }

    public function fruitFrequency() {
        return array_count_values($this->fruit);
    }

    public function mostFruit(){
        $frequency = $this->fruitFrequency();
        $highestAmount = max($frequency);
        return array_search($highestAmount, $frequency );
    }
}

?>