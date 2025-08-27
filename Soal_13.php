<?php
/**
 * Class used to analyze and sort arrays
 */
class ArraySorter {
    /**
     * @var array array to be analyzed
     */
    private array $data;
    
    /**
     * @param array $data for array ata to be stored and processed
     */
    public function __construct(array $data) {
        $this->data = $data;
    }

    /**
     * Method to sort the values ​​in an array in ascending order
     * @return array $sortedData an array which has been sorted
     */
    public function sortValues(): array {
        $sortedData = $this->data;
        asort($sortedData);
        return $sortedData;
    }

    /**
     * Method to calculate the difference between the largest and smallest values
     * @return int the difference between the largest and smallest values
     */
    public function calculateDifference(): int {
        $smallest = min($this->data);
        $largest = max($this->data);
        return $largest - $smallest;
    }
}

?>