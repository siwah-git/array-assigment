<?php

/**
 * Class for analyzing arrays containing random numbers.
 */
class ArrayAnalyzer {
    /**
     * @var array An array containing random numbers.
     */
    private array $numbers = [];

    /**
     * @param int $count The number of random numbers to generate.
     * @param int $min The smallest possible value.
     * @param int $max The largest possible value.
     */
    public function __construct(int $count, int $min, int $max) {
        for ($i = 0; $i < $count; $i++) {
            $this->numbers[] = rand($min, $max);
        }
    }
    
    /**
     * Method to get the array containing random numbers.
     * @return array The array of numbers.
     */
    public function getNumbers(): array {
        return $this->numbers;
    }

    /**
     * Method to get the smallest number in the array.
     * @return int The smallest number.
     */
    public function findSmallest(): int {
        return min($this->numbers);
    }

    /**
     * Method to get the largest number in the array.
     * @return int The largest number.
     */
    public function findLargest(): int {
        return max($this->numbers);
    }

    /**
     * Method to find the index of the first occurrence of the largest number.
     * @return int The index of the largest number.
     */
    public function findFirstLargestIndex(): int {
        $largest = $this->findLargest();
        return array_search($largest, $this->numbers);
    }

    /**
     * Method to find all indexes where the largest number appears.
     */
    public function findAllLargestIndexes(): array {
        $largest = $this->findLargest();
        $indexes = [];
        foreach ($this->numbers as $key => $value) {
            if ($value === $largest) {
                $indexes[] = $key;
            }
        }
        return $indexes;
    }
}