<?php

require 'Soal_11.php';
require 'Soal_12.php';
require 'Soal_13.php';
require 'Soal_14.php';
require 'Soal_15.php';

echo "== No. 11  == ". "<br>";

$mixedArray = [1, "2", 3, "4", 5];

$converter = new ArrayConverter($mixedArray);

$integerArray = $converter->toInteger();
echo "<pre>" . print_r($integerArray, true) . "</pre>";

$total = $converter->calculateSum();
echo "Total sum of the array is: " . $total ;

echo "<br>";
echo "<br>";

echo "== No. 12 ==". "<br>";
echo "<br>";

$analyzer = new ArrayAnalyzer(10, 1, 70);

echo "Array angka acak: ";
print_r($analyzer->getNumbers());
echo "<br>";
echo "The smallest number is : " . $analyzer->findSmallest() . "<br>";
echo "The bigest number is : " . $analyzer->findLargest() . "<br>";
echo "The position (index) of the largest number is : " . $analyzer->findLargestIndex() . "<br>";

echo "<br>";
echo "== No. 13 ==". "<br>";
echo "<br>";

$associativeArray = ["A" => 10, "B" => 20, "C" => 15, "D" => 25];

$sorter = new ArraySorter($associativeArray);

$sortedArray = $sorter->sortValues();
echo "Sorted Array (Smallest to Largest) : ";
echo "<pre>" . print_r($sortedArray, true) . "</pre>";

$difference = $sorter->calculateDifference();
echo "Difference between Largest and Smallest Values : ";
echo "The difference is :" . $difference . "<br>";

echo "<br>";
echo "== No. 14 ==". "<br>";
echo "<br>";

$cities = ["jakarta", "bandung", "surabaya", "medan", "bali"];

$modifier = new ArrayModifier($cities);

$capitalCities = $modifier->toUpperCase();
echo "Array after being converted to uppercase : ";
echo "<pre>" . print_r($capitalCities, true) . "</pre>";

$finalArray = $modifier->removeSecondElement($capitalCities);
echo "Array after the second element is removed :";
echo "<pre>" . print_r($finalArray, true) . "</pre>";

echo "<br>";
echo "== No. 15 ==". "<br>";
echo "<br>";
$sales = [
    ["Month" => "Januari", "total" => 1000000],
    ["Month" => "Februari", "total" => 1500000],
    ["Month" => "Maret", "total" => 1200000]
];

$analyzer = new SalesAnalyzer($sales);

$totalSales = $analyzer->countTotalSales();
echo "Total sales: Rp " . number_format($totalSales, 0, ',', '.') . "<br>";

$HighestSalesMonth = $analyzer->searchHighestSalesMonth();
echo "Month with the highest sales is: " . $HighestSalesMonth . "<br>";
?>