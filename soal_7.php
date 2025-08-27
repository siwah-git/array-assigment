<?php

/**
 * A class to solve a specific array problem.
 *
 * This class contains a method to filter numbers and
 * count the remaining elements in an array.
 */
class ArrayProcessor {

    /**
     * Filters out numbers that are multiples of a given value and counts the remaining elements.
     *
     * @param array $array The input array of numbers.
     * @param int $divisor The number used to find multiples (e.g., 3 for multiples of 3).
     * @return array An associative array containing 'filtered_array' and 'count'.
     */
    public function filterAndCount(array $array, int $divisor): array
    {
        // Use array_filter to remove multiples of the specified divisor.
        // The anonymous function returns true for numbers that are NOT multiples.
        $filteredArray = array_filter($array, function($number) use ($divisor) {
            return $number % $divisor !== 0;
        });

        // Recount the elements after filtering.
        $count = count($filteredArray);

        return [
            'filtered_array' => $filteredArray,
            'count' => $count
        ];
    }
}

// =====================================
// Problem Statement
// =====================================
// - Create an array of numbers from 1 to 20.
// - Remove all numbers that are multiples of 3.
// - Count the number of elements after removal.
// =====================================

// Create an array with numbers from 1 to 20.
$initialArray = range(1, 20);

// Instantiate the ArrayProcessor class.
$processor = new ArrayProcessor();

// Call the filterAndCount method with the array and divisor.
$result = $processor->filterAndCount($initialArray, 3);

// Display the initial array for comparison.
echo "Initial Array: " . PHP_EOL;
print_r($initialArray);

// Display the array after filtering.
echo PHP_EOL . "Array after removing multiples of 3:" . PHP_EOL;
print_r($result['filtered_array']);

// Display the final count.
echo PHP_EOL . "Number of elements after removal: " . $result['count'] . PHP_EOL;

?>