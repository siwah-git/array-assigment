<?php

/**
 * class Question5
 * used to process student grade data.
 * looking for students with the highest grades,
 * count how many students got scores below 70.
 * 
 */

class Question5 {
    /**
     * $score
     *
     * @var array assosiatif, store student grade data
     */
    private $score;

    /**
     * constructor
     * 
     * @param array $scores - array asosiatif (name => score)
     */

    public function __construct(array $scores) {//Save the data into the property class
        $this->score = $scores;

    }

    /**
     * highestScore
     * 
     * looking for students with high grades
     *
     * @return array displays an array with student names and grades
     */
    public function highestScore() {
        $maxScore = max($this->score);//take the highest value
        $name = array_search($maxScore, $this->score);//find the name of the student with the highest score
        return [
            "Name" => $name,
            "Score" => $maxScore
        ]; 
    }

    /**
     * studentUnder70
     * 
     * count the number of students whose scores are below 70
     *
     * @return int number of students whose scores are below 70
     */
     public function studentUnder70() {
        $filter = array_filter($this->score, function($s) {//filter values ​​less than 70
            return $s < 70;
        });
        return count($filter);//count the number of filtered students
    }

}







?>