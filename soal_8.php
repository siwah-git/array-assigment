<?php

/**
 * A class to solve problem 8 related to arrays in PHP.
 *
 * This class contains a method to calculate the median of an array and
 * display values greater than the median.
 */
class ArraySolver {

    /**
     * Finds the median of a given array.
     *
     * @param array $array The input array of numbers.
     * @return float|int The median value.
     */
    public function findMedian(array $array)
    {
        sort($array);
        $count = count($array);
        $middle = floor($count / 2);

        if ($count % 2 === 0) {
            // If the count is even, the median is the average of the two middle elements.
            return ($array[$middle - 1] + $array[$middle]) / 2;
        } else {
            // If the count is odd, the median is the middle element.
            return $array[$middle];
        }
    }

    /**
     * Filters and returns an array of values that are greater than the median.
     *
     * @param array $array The input array of numbers.
     * @param float|int $median The pre-calculated median value.
     * @return array An array containing values greater than the median.
     */
    public function findValuesGreaterThanMedian(array $array, $median): array
    {
        return array_filter($array, function ($item) use ($median) {
            return $item > $median;
        });
    }
}

// =====================================
// Problem Statement
// =====================================
// Given an array:
// $nilai = [80, 90, 100, 70, 60, 85];
// - Find the median value (not the average).
// - Display the values that are greater than the median.
// =====================================

$nilai = [80, 90, 100, 70, 60, 85];

$solver = new ArraySolver();

echo "Initial array: " . PHP_EOL;
print_r($nilai);

$median = $solver->findMedian($nilai);
echo PHP_EOL . "Median value: " . $median . PHP_EOL;

$greaterThanMedian = $solver->findValuesGreaterThanMedian($nilai, $median);
echo PHP_EOL . "Values greater than the median:" . PHP_EOL;
print_r($greaterThanMedian);

?>