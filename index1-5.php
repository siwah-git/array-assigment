<?php

require_once "Question1.php";
require_once "Question2.php";
require_once "Question3.php";
require_once "Question4.php";


echo "=== Question 1 ===". PHP_EOL . "<br>";
$numbers = [2, 4, 6, 76, 45, 34, 23, 12, 17, 90, 46, 88, 76, 73, 27];
$question1 = new Question1 ($numbers); 

echo "A. Row of Number: "; 
echo print_r($numbers, true);

echo "<br>";
echo "B. Sort Ascending of Number : ";
print_r($question1->sortAscending()); 

echo "<br>";

echo "C. 3 Largest Numbers in an Array : "; 
print_r($question1->getTopThree());

echo "<br>";
echo "D. Average of the 3 Largest Numbers : " . $question1->averageTopThree();

echo "<br>";
echo "<br>";

echo "=== Question 2 ===" . PHP_EOL . "<br>";

$fruit = ["banana", "orange", "apple", "apple","orange","guava", "banana","mango", "melon","guava", "apple",
"apple","orange","banana","mango"];

$question2 = new Question2 ($fruit);

echo "A. Row of Fruit : "; "<br>";
print_r($question2->sortAscending());

echo "<br>";
echo " B. How Many Times Each Fruit Appears : "; "<br>";
print_r($question2->fruitFrequency());

echo "<br>";
echo "C. Displays the Most Frequently Appearing Fruits : " . $question2->mostFruit();


echo "<br>";
echo "<br>";

echo "=== Question 3 ===" . PHP_EOL . "<br>";

$stationary = [ ["name" => "Pensil", "price" => 2000, "stock" => 10],
["name" => "Buku", "price" => 5000, "stock" => 0],
["name" => "Penghapus", "price" => 1000, "stock" => 5] ];

$question3 = New Question3 ($stationary);

echo "<br>";
echo " A. Displays all out of stock items : ";"<br>";
print_r($question3->emptyStock());

echo "<br>";
echo "B. Sort Items by Highest Price : ";"<br>";
print_r($question3->sortbyHighestPrice());

echo "<br>";
echo "<br>";

echo "=== Question 4 ===" . PHP_EOL . "<br>";

$numbers = [2, 3, 4, 5, 6, 11, 12, 13, 14, 23, 25, 27, 28, 34, 35, 23];
$question4 = new Question4 ($numbers);

echo " A. Row of Number : "; 
echo print_r($numbers, true);

echo "<br>";
echo "B. Displays all even numbers : "; "<br>";
print_r($question4->filterEven());

echo "<br>";
echo "B. Displays Even Numbers Multiplied by 3 : "; "<br>";
print_r ($question4->multipliedBy3());

?>