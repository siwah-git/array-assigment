<?php

/**
 * A class containing solutions for multiple PHP array problems.
 * This class encapsulates the logic for problems 6 through 10.
 */
class ArrayProblemSolver {

    /**
     * Solves No. 6: Displays all product names and all unique variants.
     *
     * @param array $products The multidimensional array of product data.
     * @return void
     */
    public function solveNo6(array $products): void
    {
        echo "--- No. 6 ---" . PHP_EOL;
        echo "<br>";

        // Display all product names
        $productNames = array_column($products, 'nama');
        echo "All Product Names:" . PHP_EOL;
        print_r($productNames);
        echo "<br>";

        // Display all unique variants
        $allVariants = [];
        foreach ($products as $item) {
            $allVariants = array_merge($allVariants, $item['varian']);
        }
        $uniqueVariants = array_unique($allVariants);
        echo PHP_EOL . "All Unique Variants:" . PHP_EOL;
        print_r($uniqueVariants);
        echo "<br>";
        echo "<br>";
    }

    /**
     * Solves No. 7: Filters out multiples of 3 from an array and counts the remaining elements.
     *
     * @param array $numbers The initial array of numbers from 1 to 20.
     * @return void
     */
    public function solveNo7(array $numbers): void
    {
        echo PHP_EOL . "--- No. 7 ---" . PHP_EOL;
        echo "<br>";

        // Filter out multiples of 3
        $filteredNumbers = array_filter($numbers, function($number) {
            return $number % 3 !== 0;
        });

        // Count the number of elements after filtering
        $elementCount = count($filteredNumbers);

        echo "Filtered Array:" . PHP_EOL;
        print_r($filteredNumbers);
        echo "<br>";
        echo PHP_EOL . "Count of elements after filtering: " . $elementCount . PHP_EOL;
        echo "<br>";
        echo "<br>";
    }

    /**
     * Solves No. 8: Finds the median and displays values greater than it.
     *
     * @param array $scores The initial array of scores.
     * @return void
     */
    public function solveNo8(array $scores): void
    {
        echo PHP_EOL . "--- No. 8 ---" . PHP_EOL;
        echo "<br>";

        // Find the median value
        sort($scores);
        $count = count($scores);
        $middle = floor($count / 2);
        $median = ($count % 2 === 0) ? ($scores[$middle - 1] + $scores[$middle]) / 2 : $scores[$middle];

        // Filter values greater than the median
        $greaterThanMedian = array_filter($scores, function($item) use ($median) {
            return $item > $median;
        });

        echo "Median value: " . $median . PHP_EOL;
        echo "Values greater than the median:" . PHP_EOL;
        print_r($greaterThanMedian);
        echo "<br>";
        echo "<br>";
    }

    /**
     * Solves No. 9: Modifies an associative array.
     *
     * @param array $fruits The initial associative array of fruits.
     * @return void
     */
    public function solveNo9(array $fruits): void
    {
        echo PHP_EOL . "--- No. 9 ---" . PHP_EOL;
        echo "<br>";

        // Add "pisang" with a count of 4
        $fruits['pisang'] = 4;

        // Decrease the count of "jeruk" to 3
        $fruits['jeruk'] = 3;

        // Remove "mangga"
        unset($fruits['mangga']);

        echo "Final Fruit Array:" . PHP_EOL;
        print_r($fruits);
        echo "<br>";
        echo "<br>";
    }

    /**
     * Solves No. 10: Finds employees in a specific division and calculates the total salary.
     *
     * @param array $employees The multidimensional array of employee data.
     * @return void
     */
    public function solveNo10(array $employees): void
    {
        echo PHP_EOL . "--- No. 10 ---" . PHP_EOL;
        echo "<br>";

        // Display employees in the IT division
        echo "IT Division Employees:" . PHP_EOL;
        foreach ($employees as $employeeData) {
            if ($employeeData['divisi'] === 'IT') {
                echo "- " . $employeeData['nama'] . PHP_EOL;
            }
        }
        echo "<br>";

        // Calculate total salary
        $totalSalary = 0;
        foreach ($employees as $employeeData) {
            $totalSalary += $employeeData['gaji'];
        }
        echo PHP_EOL . "Total Salary of all employees: Rp " . number_format($totalSalary, 0, ',', '.') . PHP_EOL;
        echo "<br>";
    }
}

// =====================================
// Main Execution
// =====================================
$solver = new ArrayProblemSolver();

// Data for each problem
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

$solver->solveNo6($produk);


$solver->solveNo7($angka);


$solver->solveNo8($nilai);


$solver->solveNo9($buah);


$solver->solveNo10($karyawan);

?>