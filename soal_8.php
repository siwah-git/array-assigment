<?php

/**
 * A utility class for statistical array analysis.
 * This class provides methods to calculate key statistical values like the median.
 */
class ArrayStats
{

    /**
     * Finds the median of a numeric array.
     *
     * The median is the middle value in a sorted list. If the list
     * has an even number of elements, the median is the average of
     * the two middle values.
     *
     * @param array $data The input array of numbers.
     * @return float|int The calculated median.
     */
    public function getMedian(array $data)
    {
        // First, we need to sort the array to find the middle value(s).
        sort($data);
        $count       = count($data);
        $middleIndex = floor($count / 2);

        // Check if the number of elements is even or odd.
        if ($count % 2 === 0) {
            // Even: return the average of the two middle elements.
            return ($data[$middleIndex - 1] + $data[$middleIndex]) / 2;
        } else {
            // Odd: return the single middle element.
            return $data[$middleIndex];
        }
    }

    /**
     * Filters an array to return only values that are greater than a specified threshold.
     *
     * @param array $data The array to filter.
     * @param float|int $threshold The value to compare against.
     * @return array An array containing only the values greater than the threshold.
     */
    public function filterGreaterThan(array $data, $threshold): array
    {
        // `array_filter` is perfect for this; it's clean and efficient.
        return array_filter($data, function ($item) use ($threshold) {
            return $item > $threshold;
        });
    }
}

$scores = [80, 90, 100, 70, 60, 85];
$stats  = new ArrayStats();

echo "--- No. 8 ---" . PHP_EOL;

// Calculate the median
$median = $stats->getMedian($scores);
echo "Median value: " . $median . PHP_EOL;

// Find scores above the median
$aboveMedian = $stats->filterGreaterThan($scores, $median);
echo PHP_EOL . "Scores greater than the median:" . PHP_EOL;
print_r($aboveMedian);