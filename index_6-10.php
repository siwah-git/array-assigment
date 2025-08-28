<?php

/**
 * A handy utility class for common array manipulation tasks.
 * This class encapsulates solutions for a few programming challenges.
 */
class ArrayUtilities
{

    /**
     * Extracts all product names and finds all unique variants from a list of products.
     *
     * @param array $products The multidimensional array containing product data.
     * @return void
     */
    public function processProductData(array $products): void
    {
        echo "--- No. 6 ---<br>" . PHP_EOL;

        // Get all product names
        $productNames = array_column($products, 'name');
        echo "All Product Names:<br>";
        foreach ($productNames as $name) {
            echo "- " . $name . "<br>";
        }
        echo "<br>";

        // Merge all variants
        $allVariants = [];
        foreach ($products as $item) {
            $allVariants = array_merge($allVariants, $item['variants']);
        }

        // Get unique variants
        $uniqueVariants = array_unique($allVariants);

        echo "All Unique Variants:<br>";
        foreach ($uniqueVariants as $variant) {
            echo "- " . $variant . "<br>";
        }
        echo "<br><br>";
    }

    /**
     * Filters a range of numbers to remove multiples of 3, then counts the remaining elements.
     *
     * @param array $numbers The initial array of numbers.
     * @return void
     */
    public function filterAndCountNumbers(array $numbers): void
    {
        echo "--- No. 7 ---<br>";

        $filteredNumbers = array_filter($numbers, function ($number) {
            return $number % 3 !== 0;
        });

        echo "Filtered Array (no multiples of 3):<br>";
        foreach ($filteredNumbers as $key => $value) {
            echo "[" . $key . "] => " . $value . "<br>";
        }

        $elementCount = count($filteredNumbers);
        echo "<br>Count of elements after filtering: " . $elementCount . "<br><br>";
    }

    /**
     * Calculates the median of an array and identifies values that are greater than it.
     *
     * @param array $scores The array of numeric scores.
     * @return void
     */
    public function analyzeScores(array $scores): void
    {
        echo PHP_EOL . "--- No. 8 ---" . "<br>" . PHP_EOL;

        // Copy scores for median calculation
        $sortedScores = $scores;
        sort($sortedScores);
        $count       = count($sortedScores);
        $middleIndex = floor($count / 2);

        $median = ($count % 2 === 0)
        ? ($sortedScores[$middleIndex - 1] + $sortedScores[$middleIndex]) / 2
        : $sortedScores[$middleIndex];

        echo "Median value: " . $median . "<br>";

        // Filter original array (not the sorted one) to keep the original keys/order
        $aboveMedian = array_filter($scores, function ($item) use ($median) {
            return $item > $median;
        });

        echo "Values greater than the median:<br>";
        foreach ($aboveMedian as $key => $value) {
            echo "[" . $key . "] => " . $value . "<br>";
        }

        echo "<br>";
    }

    /**
     * Manages a fruit inventory by performing add, modify, and remove operations.
     *
     * @param array $inventory The initial associative array of fruits.
     * @return void
     */
    public function manageFruitInventory(array $inventory): void
    {
        echo "--- No. 9 ---<br>";

        // Add "banana"
        $inventory['banana'] = 4;
        echo "After adding banana:<br>";
        foreach ($inventory as $fruit => $qty) {
            echo "[" . $fruit . "] => " . $qty . "<br>";
        }
        echo "<br>";

        // Update "orange" stock
        $inventory['orange'] = 3;
        echo "After updating orange stock:<br>";
        foreach ($inventory as $fruit => $qty) {
            echo "[" . $fruit . "] => " . $qty . "<br>";
        }
        echo "<br>";

        // Remove "mango"
        unset($inventory['mango']);
        echo "After removing mango:<br>";
        foreach ($inventory as $fruit => $qty) {
            echo "[" . $fruit . "] => " . $qty . "<br>";
        }
        echo "<br>";
    }

    /**
     * Processes employee data to find people in IT department and calculate total salary.
     *
     * @param array $employees The multidimensional array of employee records.
     * @return void
     */
    public function processEmployeeData(array $employees): void
    {
        echo PHP_EOL . "--- No. 10 ---" . "<br>" . PHP_EOL;
        echo "IT Department Employees: ";

        $itEmployeeNames = [];
        foreach ($employees as $employee) {
            if ($employee['department'] === 'IT') {
                $itEmployeeNames[] = $employee['name'];
            }
        }

        echo implode(', ', $itEmployeeNames) . ".<br>";

        $totalSalary = 0;
        foreach ($employees as $employee) {
            $totalSalary += $employee['salary'];
        }
        echo "Total Salary of all employees: Rp " . number_format($totalSalary, 0, ',', '.') . PHP_EOL;
        echo "<br>";
    }
}

// =====================================
// Main Script Execution
// =====================================

$utils = new ArrayUtilities();

// Data for each problem (all in English now).
$products = [
    ["name" => "T-Shirt", "variants" => ["red", "blue", "black"]],
    ["name" => "Shoes", "variants" => ["white", "brown"]],
    ["name" => "Cap", "variants" => ["black"]],
];
$numbers   = range(1, 20);
$scores    = [80, 90, 100, 70, 60, 85];
$fruits    = ["apple" => 3, "orange" => 5, "mango" => 2];
$employees = [
    ["name" => "Rudy", "salary" => 5000000, "department" => "IT"],
    ["name" => "Anna", "salary" => 4500000, "department" => "HR"],
    ["name" => "Donny", "salary" => 5500000, "department" => "IT"],
];

$utils->processProductData($products);
$utils->filterAndCountNumbers($numbers);
$utils->analyzeScores($scores);
$utils->manageFruitInventory($fruits);
$utils->processEmployeeData($employees);