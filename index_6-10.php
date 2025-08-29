<?php
require 'Soal_6.php';
require "Soal_7.php";
require 'Soal_8.php';
require 'Soal_9.php';
require 'Soal_10.php';

echo "=== Question 6 ===" . PHP_EOL . "<br>";

$products = [
    ['name' => 'T-Shirt', 'variants' => ['red', 'blue', 'black']],
    ['name' => 'Shoes', 'variants' => ['white', 'brown']],
    ['name' => 'Hat', 'variants' => ['black']],
];

$analyzer = new ProductAnalyzer();

$analyzer->showNames($products);
$analyzer->showVariants($products);
echo "<br>";

echo "=== Question 7 ===" . PHP_EOL . "<br>";

$NumberFilter = new NumberFilter();

// 1. Make array from 1 to 20
$array = $NumberFilter->generateArray();

// 2. Delete numbers that multiple by 3
$filtered = $NumberFilter->removeMultiplesOfThree($array);

// 3. Count elements after delete
$count = $NumberFilter->countElements($filtered);

// Show result
echo "A. Array of number 1 until 20 : ";
echo "<pre>" . print_r($array, true) . "</pre>";

echo "B. Array after delete number multiple 3 : ";
echo "<pre>" . print_r($filtered, true) . "</pre>";

echo "C. Total element after delete : " . $count;
echo "<br>";
echo "<br>";

echo "=== Question 8 ===" . PHP_EOL . "<br>";
$nilai = [80, 90, 100, 70, 60, 85];

$processor = new MedianProcessor();

$median      = $processor->getMedian($nilai);
$aboveMedian = $processor->getValuesAboveMedian($nilai, $median);

echo "Values: " . implode(", ", $nilai) . "<br>";
echo "Median: {$median}<br>";
echo "Values above median: " . implode(", ", $aboveMedian);
echo "<br>";
echo "<br>";

echo "=== Question 9 ===" . PHP_EOL . "<br>";
$stocks = [
    "apel"   => 3,
    "jeruk"  => 5,
    "mangga" => 2,
];

$manager = new StockManager();

// (1) Add "pisang" = 4
$stocks = $manager->addStock($stocks, "pisang", 4);
echo "1) After adding pisang (4):<br>";
foreach ($stocks as $fruit => $qty) {
    echo "- {$fruit} : {$qty}<br>";
}
echo "<br>";

// (2) Update "jeruk" = 3
$stocks = $manager->updateStock($stocks, "jeruk", 3);
echo "2) After updating jeruk to 3:<br>";
foreach ($stocks as $fruit => $qty) {
    echo "- {$fruit} : {$qty}<br>";
}
echo "<br>";

// (3) Remove "mangga"
$stocks = $manager->removeStock($stocks, "mangga");
echo "3) After removing mangga:<br>";
foreach ($stocks as $fruit => $qty) {
    echo "- {$fruit} : {$qty}<br>";
}
echo "<br>";

echo "=== Question 10 ===" . PHP_EOL . "<br>";
$karyawan = [
    ["nama" => "Rudi", "gaji" => 5000000, "divisi" => "IT"],
    ["nama" => "Ayu", "gaji" => 4500000, "divisi" => "HRD"],
    ["nama" => "Doni", "gaji" => 5500000, "divisi" => "IT"],
];

$analyzer = new EmployeeAnalyzer();

// (1) Show all IT employee names
$itNames = $analyzer->getNamesByDivision($karyawan, "IT");
echo "Employees in IT division: " . implode(", ", $itNames) . "<br>";

// (2) Calculate total salary
$totalSalary = $analyzer->getTotalSalary($karyawan);
echo "Total salary of all employees: Rp " . number_format($totalSalary, 0, ',', '.');