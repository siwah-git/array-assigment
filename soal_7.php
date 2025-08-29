<?php
/**
 * Class NumberFilter
 *
 * Task:
 * 1. Make an array from number 1 until 20.
 * 2. Delete all numbers that are multiples of 3.
 * 3. Count how many elements remain after delete.
 */
class NumberFilter
{
    /**
     * Make array from 1 until 20.
     *
     * @return array
     */
    public function generateArray(): array
    {
        return range(1, 20);
    }

    /**
     * Delete numbers that can divide by 3.
     *
     * @param array $numbers
     * @return array
     */
    public function removeMultiplesOfThree(array $numbers): array
    {
        return array_filter($numbers, function ($num) {
            return $num % 3 !== 0;
        });
    }

    /**
     * Count how many numbers in array.
     *
     * @param array $numbers
     * @return int
     */
    public function countElements(array $numbers): int
    {
        return count($numbers);
    }
}