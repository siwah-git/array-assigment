<?php
/**
 * Class NumberFilter
 */
class NumberFilter
{
    /**
     * Take an array, remove multiples of 3,
     * then print the array and how many are left.
     */
    public function filterAndCount(array $numbers): void
    {
        echo "--- No. 7 ---<br>";

        // remove numbers that can be divided by 3
        $filtered = array_filter($numbers, function($num) {
            return $num % 3 !== 0;
        });

        // print the new array
        echo "Filtered Array (no multiples of 3):<br>";
        foreach ($filtered as $key => $value) {
            echo "[" . $key . "] => " . $value . "<br>";
        }

        // show how many numbers remain
        $count = count($filtered);
        echo "<br>Count of elements after filtering: " . $count . "<br><br>";
    }
}
?>