<?php

class Question5 {
    private $score;

    public function __construct(array $scores) {
        $this->score = $scores;

    }
public function highestScore() {
        $maxScore = max($this->score);
        $name = array_search($maxScore, $this->score);
        return [
            "Name" => $name,
            "Score" => $maxScore
        ]; 
    }

     public function studentUnder70() {
        $filter = array_filter($this->score, function($s) {
            return $s < 70;
        });
        return count($filter);
    }

}







?>