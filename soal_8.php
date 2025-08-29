<?php

/**
 * Class MedianProcessor
 * Provides methods to calculate median
 * and filter values greater than the median.
 */
class MedianProcessor
{
    /**
     * Calculate the median of an array of numbers.
     *
     * @param array $values
     * @return float
     */
    public function getMedian(array $values): float
    {
        sort($values);
        $count  = count($values);
        $middle = intdiv($count, 2);

        if ($count % 2 === 0) {
            // even count -> average of two middle values
            return ($values[$middle - 1] + $values[$middle]) / 2;
        } else {
            // odd count -> middle value
            return $values[$middle];
        }
    }

    /**
     * Get all values greater than the given median.
     *
     * @param array $values
     * @param float $median
     * @return array
     */
    public function getValuesAboveMedian(array $values, float $median): array
    {
        return array_filter($values, fn($v) => $v > $median);
    }
}