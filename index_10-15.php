<?php

require 'Soal_10.php';
require 'Soal_11.php';
require 'Soal_12.php';
require 'Soal_13.php';
require 'Soal_14.php';
require 'Soal_15.php';

echo "== No. 10 Employees in the IT division and the total salary of all employees ==". "<br>";

echo "<br>";
echo "List of employees in the IT division"."<br>";
$EmployeeList = [
    new Employee("Rudi", 5000000, "IT"),
    new Employee("Ayu", 4500000, "HRD"),
    new Employee("Doni", 5500000, "IT")
];

foreach ($EmployeeList as $Employee){
    if ($Employee->getDivision() == "IT") {
        echo "- " . $Employee->getName() . "<br>";
    }
}

$totalSalary = 0;
foreach ($EmployeeList as $Employee){
    $totalSalary += $Employee->getSalary();
}

echo "total salary of all employees : Rp " . number_format($totalSalary, 0, ', ', '.')."<br>";

echo "<br>";
echo "== No. 11 Convert all elements to integers and Calculate the total sum of the array == ". "<br>";

$mixedArray = [1, "2", 3, "4", 5];

$converter = new ArrayConverter($mixedArray);

$integerArray = $converter->toInteger();
echo "<pre>" . print_r($integerArray, true) . "</pre>";

$total = $converter->calculateSum();
echo "Total sum of the array is: " . $total ;

echo "<br>";
echo "<br>";

echo "== No. 12 Create an array containing 10 random numbers between 1–100.
Then, find the smallest and largest numbers and display the position (index) of the largest number ==". "<br>";
echo "<br>";

$analyzer = new ArrayAnalyzer(10, 1, 70);

echo "Array angka acak: ";
print_r($analyzer->getNumbers());
echo "<br>";
echo "Angka terkecil adalah: " . $analyzer->findSmallest() . "<br>";
echo "Angka terbesar adalah: " . $analyzer->findLargest() . "<br>";
echo "Posisi (indeks) dari angka terbesar adalah: " . $analyzer->findLargestIndex() . "<br>";

echo "<br>";
echo "== No. 13 Create an array containing 10 random numbers between 1–100.
Then, find the smallest and largest numbers and display the position (index) of the largest number ==". "<br>";
echo "<br>";

$associativeArray = ["A" => 10, "B" => 20, "C" => 15, "D" => 25];

$sorter = new ArraySorter($associativeArray);

$sortedArray = $sorter->sortValues();
echo "Array Diurutkan (Terkecil ke Terbesar): ";
echo "<pre>" . print_r($sortedArray, true) . "</pre>";

$difference = $sorter->calculateDifference();
echo "Selisih Nilai Terbesar dan Terkecil: ";
echo "Selisihnya adalah: " . $difference . "<br>";

echo "<br>";
echo "== No. 14 Create an array containing 10 random numbers between 1–100.
Then, find the smallest and largest numbers and display the position (index) of the largest number ==". "<br>";
echo "<br>";

$cities = ["jakarta", "bandung", "surabaya", "medan", "bali"];

$modifier = new ArrayModifier($cities);

$capitalCities = $modifier->toUpperCase();
echo "Array setelah diubah menjadi huruf kapital: ";
echo "<pre>" . print_r($capitalCities, true) . "</pre>";

$finalArray = $modifier->removeSecondElement($capitalCities);
echo "Array setelah elemen kedua dihapus: ";
echo "<pre>" . print_r($finalArray, true) . "</pre>";

echo "<br>";
echo "== No. 14 Create an array containing 10 random numbers between 1–100.
Then, find the smallest and largest numbers and display the position (index) of the largest number ==". "<br>";
echo "<br>";

$penjualan = [
    ["bulan" => "Januari", "total" => 1000000],
    ["bulan" => "Februari", "total" => 1500000],
    ["bulan" => "Maret", "total" => 1200000]
];

$analyzer = new PenjualanAnalyzer($penjualan);


$totalPenjualan = $analyzer->hitungTotalPenjualan();
echo "Total sales: Rp " . number_format($totalPenjualan, 0, ',', '.') . "<br>";

$bulanTerlaris = $analyzer->cariBulanPenjualanTertinggi();
echo "Month with the highest sales is: " . $bulanTerlaris . "<br>";

?>