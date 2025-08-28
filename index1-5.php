<?php

//import class so can use them
require_once "Soal1.php";
require_once "Soal2.php";
require_once "Soal3.php";
require_once "Soal4.php";
require_once "Soal5.php";


echo "=== Question 1 ===". PHP_EOL . "<br>";
$numbers = [2, 4, 6, 76, 45, 34, 23, 12, 17, 90, 46, 88, 76, 73, 27];//define an array of numbers
$question1 = new Question1 ($numbers); //create object from Question1 class

echo "A. Row of Number: "; 
echo "<pre>" . print_r($numbers, true) . "</pre>";

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
"apple","orange","banana","mango"];//define an array of fruit

$question2 = new Question2 ($fruit);// Create object from Question2 class

echo "A. Row of Fruit : "; "<br>";
echo "<pre>" . print_r($fruit, true) . "</pre>";

echo "<br>";
echo " B. How Many Times Each Fruit Appears : "; "<br>";
print_r($question2->fruitFrequency());

echo "<br>";
echo "C. Displays the Most Frequently Appearing Fruits : " . $question2->mostFruit();


echo "<br>";
echo "<br>";

echo "=== Question 3 ===" . PHP_EOL . "<br>";

//Define an array of stationery items with name, price, and stock
$stationary = [ ["name" => "Pencil", "price" => 2000, "stock" => 10],
["name" => "Book", "price" => 5000, "stock" => 0],
["name" => "Eraser", "price" => 1000, "stock" => 5] ];

$question3 = New Question3 ($stationary);//Create object from Question3 class

echo "<br>";

echo "A. Row of Stationery : ";
echo "<pre>" . print_r($stationary, true) . "</pre>";

echo " B. Displays all out of stock items : ";"<br>";
print_r($question3->emptyStock());

echo "<br>";
echo "C. Sort Items by Highest Price : ";"<br>";
print_r($question3->sortbyHighestPrice());

echo "<br>";
echo "<br>";

echo "=== Question 4 ===" . PHP_EOL . "<br>";

// Define an array of numbers
$numbers = [2, 3, 4, 5, 6, 11, 12, 13, 14, 23, 25, 27, 28, 34, 35, 23];
$question4 = new Question4 ($numbers);//Create object from Question4 class

echo " A. Row of Number : "; 
echo "<pre>" . print_r($numbers, true) . "</pre>";

echo "<br>";
echo "B. Displays all even numbers : "; "<br>";
print_r($question4->filterEven());

echo "<br>";
echo "B. Displays Even Numbers Multiplied by 3 : "; "<br>";
print_r ($question4->multipliedBy3());


echo "<br>";
echo "<br>";
echo "=== Question 5 ===" . PHP_EOL . "<br>";

// Define student names and their scores
$score = ["Siwah" => 99, "Sinta" => 67, "Resty"=> 77, "Ronaldo"=>69, "Messi"=>87, "Neymar"=>80];
$question5 = new Question5 ($score);// Create object from Question5 class

echo " A. Row of Student and Score : ";
echo "<pre>" . print_r($score, true) . "</pre>";
                                                                                                                                             
echo "<br>";
echo "B. Students with the Highest Scores : ";
print_r ($question5->HighestScore());

echo "<br>";
echo "C. Number of Students Whose Scores are Below 70 : ";
print_r($question5->studentUnder70());

?>