<?php
/**
 * Class for analyzing arrays containing random numbers
 */
class ArrayAnalyzer {
    /**
     * @var $numbers an arrays containing random numbers
     */
    private array $numbers;

    /**
     * @param $count random numbers in an array
     * @param $min smallest value in an array
     * @param $max the largest value in the array
     */
    public function __construct(int $count, int $min, int $max) {
        $this->numbers = [];
        for ($i = 0; $i < $count; $i++) {
            $this->numbers[] = rand($min, $max);
        }
    }
    
    /**
     * Method to get an array containing random numbers
     * @return array
     */
    public function getNumbers(): array {
        return $this->numbers;
    }

    /**
     * Method to get the smallest number
     * @return $min the smallest number in array
     */
    public function findSmallest(): int {
        return min($this->numbers);
    }
    /**
     * Method to get the bigest number
     * @return $max the bigest number in array
     */
    public function findLargest(): int {
        return max($this->numbers);
    }

    /**
     * Method to find the largest number sequence (index) in an array
     * @return $largest index of he largest number
     */
    public function findLargestIndex(): int {
        $largest = $this->findLargest();
        return array_search($largest, $this->numbers);
    }
}

?>