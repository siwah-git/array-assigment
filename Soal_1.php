<?php


class Question1 {
    public $num;

    public function __construct(array $number) {
        $this->num = $number;

    }

    public function sortAscending() {
        sort($this->num);
        return $this->num;
    }


    public function getTopThree(){
        $this->sortAscending();
        return array_slice($this->num, -3);
    }

    public function averageTopThree(){
        $topThree = $this->getTopThree();
        $sum = array_sum($topThree);
        return $sum / count($topThree);
    }
}
    
?>