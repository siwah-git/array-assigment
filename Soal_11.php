<?php
/**
 * Class ArrayConverter to change the value of a number from a string to an integer
 */
Class ArrayConverter {
    /**
     * @var array $mixedArray an array containing a mixture of strings and integers 
     */
    private array $mixedArray;

    /**
     * @param mixedArray an array containing a mixture of strings and integers 
     */
    public function __construct(array $mixedArray){
        $this->mixedArray = $mixedArray;
    }

    /**
     * Method used to change the value from string to integer
     * @return $convertedArray a array with string value that has been converted to integer
     */
    public function toInteger(): array {
        $convertedArray = [];
        foreach ($this->mixedArray as $item) {
            $convertedArray[] = (int) $item;
        }
        return $convertedArray;
    }
    
    /**
     * Method to calculated of the sum of the values ​​in the array
     * @return $totalSum the result of the calculation of the sum of the values ​​in the array
     */
    public function calculateSum(): int {
        $totalSum = 0;
        foreach ($this->mixedArray as $item) {
            $totalSum += (int) $item;
        }
        return $totalSum;
    }

}
?>