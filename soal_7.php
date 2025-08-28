<?php

/**
 * A utility class to handle common array operations.
 * This is the kind of stuff you do every day as a dev.
 */
class ArrayProcessor
{

    /**
     * Filters a range of numbers, removing multiples of a specific divisor,
     * and then reports the final count. It's a clean way to handle data
     * that needs some basic sanitation.
     *
     * @param int $start The starting number of the range.
     * @param int $end The ending number of the range.
     * @param int $divisor The number used to filter out multiples.
     * @return array An array containing the filtered numbers and their count.
     */
    public function processFilteredNumbers(int $start, int $end, int $divisor): array
    {
        // First, let's create our initial array from the range
        $numbers = range($start, $end);

        // Use a simple `array_filter` with a closure. It's concise and readable.
        $filteredNumbers = array_filter($numbers, function ($number) use ($divisor) {
            // This is the core logic: keep the number if it's NOT a multiple of the divisor
            return $number % $divisor !== 0;
        });

        // Get the final count, this is super easy
        $finalCount = count($filteredNumbers);

        // Returning an associative array is a good way to give back multiple pieces of data
        return [
            'filtered_array' => $filteredNumbers,
            'count'          => $finalCount,
        ];
    }
}

$processor = new ArrayProcessor();

// Get the result from our method call
$result = $processor->processFilteredNumbers(1, 20, 3);

echo "--- No. 7 ---" . PHP_EOL;
echo "Filtered Array (no multiples of 3):" . PHP_EOL;
print_r($result['filtered_array']);

echo PHP_EOL . "Count of remaining elements: " . $result['count'] . PHP_EOL;