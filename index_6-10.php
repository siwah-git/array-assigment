<?php

/**
 * A handy utility class for common array manipulation tasks.
 * This class encapsulates solutions for a few programming challenges.
 */
class ArrayUtilities {

    /**
     * Extracts all product names and finds all unique variants from a list of products.
     *
     * @param array $products The multidimensional array containing product data.
     * @return void
     */
    public function processProductData(array $products): void
    {
        echo "--- No. 6 ---" . "<br>" . PHP_EOL;
        echo "All Product Names: ";
        $productNames = array_column($products, 'nama');
        print_r($productNames);
        echo "<br>";

        // Building a flat list of all variants, then using array_unique to get the distinct ones.
        $allVariants = [];
        foreach ($products as $item) {
            $allVariants = array_merge($allVariants, $item['varian']);
        }
        $uniqueVariants = array_unique($allVariants);
        echo "All Unique Variants: ";
        print_r($uniqueVariants);
        echo "<br>";
        echo "<br>";
    }

    /**
     * Filters a range of numbers to remove multiples of 3, then counts the remaining elements.
     * A good demonstration of using closures with array functions.
     *
     * @param array $numbers The initial array of numbers.
     * @return void
     */
    public function filterAndCountNumbers(array $numbers): void
    {
        echo PHP_EOL . "--- No. 7 ---" . "<br>" . PHP_EOL;
        echo "Filtered Array: ";

        // Using array_filter with a closure is the standard, clean way to filter data.
        $filteredNumbers = array_filter($numbers, function ($number) {
            return $number % 3 !== 0; // Check if the number is not a multiple of 3.
        });

        $elementCount = count($filteredNumbers);
        print_r($filteredNumbers);
        echo "<br>";
        echo "Count of elements after filtering: " . $elementCount . PHP_EOL;
        echo "<br>";
        echo "<br>";
    }

    /**
     * Calculates the median of an array and identifies values that are greater than it.
     * This is a simple but useful data analysis task.
     *
     * @param array $scores The array of numeric scores.
     * @return void
     */
    public function analyzeScores(array $scores): void
    {
        echo PHP_EOL . "--- No. 8 ---" . "<br>" . PHP_EOL;

        // Find the median. Sorting the array is the first step.
        sort($scores);
        $count = count($scores);
        $middleIndex = floor($count / 2);

        // Use a ternary operator to handle both even and odd counts.
        $median = ($count % 2 === 0) ? ($scores[$middleIndex - 1] + $scores[$middleIndex]) / 2 : $scores[$middleIndex];
        echo "Median value: " . $median . " ";

        // Filter the array to find all values above the median.
        $aboveMedian = array_filter($scores, function ($item) use ($median) {
            return $item > $median;
        });
        echo "Values greater than the median: ";
        print_r($aboveMedian);
        echo "<br>";
        echo "<br>";
    }

    /**
     * Manages a fruit inventory by performing a series of updates: add, modify, and remove.
     * This shows common associative array manipulations in a practical context.
     *
     * @param array $inventory The initial associative array of fruits.
     * @return void
     */
    public function manageFruitInventory(array $inventory): void
    {
        echo PHP_EOL . "--- No. 9 ---" . "<br>" .PHP_EOL;
        // Simply add a new key-value pair.
        $inventory['pisang'] = 4;

        // Update the value of an existing key.
        $inventory['jeruk'] = 3;

        // Use `unset` to remove an element completely.
        unset($inventory['mangga']);

        echo "Final Fruit Array: ";
        print_r($inventory);
        echo "<br>";
        echo "<br>";
    }

    /**
     * Processes employee data to find people in a specific department and calculate total salary.
     * This is a typical data filtering and aggregation task.
     *
     * @param array $employees The multidimensional array of employee records.
     * @return void
     */
    public function processEmployeeData(array $employees): void
    {
        echo PHP_EOL . "--- No. 10 ---" . "<br>" . PHP_EOL;
        echo "IT Division Employees: ";

        // Collect names of IT employees into a new array to avoid trailing comma.
        $itEmployeeNames = [];
        foreach ($employees as $employee) {
            if ($employee['divisi'] === 'IT') {
                $itEmployeeNames[] = $employee['nama'];
            }
        }
        
        // Use implode to join the names with commas and then echo the result.
        echo implode(', ', $itEmployeeNames);
        echo ".";
        echo "<br>";

        // Task 2: Calculate the total salary.
        $totalSalary = 0;
        foreach ($employees as $employee) {
            $totalSalary += $employee['gaji'];
        }
        echo "Total Salary of all employees: Rp " . number_format($totalSalary, 0, ',', '.') . PHP_EOL;
        echo "<br>";
    }
}

// =====================================
// Main Script Execution
// =====================================

$utils = new ArrayUtilities();

// Data for each problem.
$produk = [
    ["nama" => "Kaos", "varian" => ["merah", "biru", "hitam"]],
    ["nama" => "Sepatu", "varian" => ["putih", "coklat"]],
    ["nama" => "Topi", "varian" => ["hitam"]]
];
$angka = range(1, 20);
$nilai = [80, 90, 100, 70, 60, 85];
$buah = ["apel" => 3, "jeruk" => 5, "mangga" => 2];
$karyawan = [
    ["nama" => "Rudi", "gaji" => 5000000, "divisi" => "IT"],
    ["nama" => "Ayu", "gaji" => 4500000, "divisi" => "HRD"],
    ["nama" => "Doni", "gaji" => 5500000, "divisi" => "IT"]
];

$utils->processProductData($produk);
$utils->filterAndCountNumbers($angka);
$utils->analyzeScores($nilai);
$utils->manageFruitInventory($buah);
$utils->processEmployeeData($karyawan);
?>