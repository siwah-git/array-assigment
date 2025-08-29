require_once "Soal_7.php";

echo "<br>";
echo "=== Question 7 ===" . PHP_EOL . "<br>";

$question7 = new Question7();

// 1. Make array from 1 to 20
$array = $question7->generateArray();

// 2. Delete numbers that multiple by 3
$filtered = $question7->removeMultiplesOfThree($array);

// 3. Count elements after delete
$count = $question7->countElements($filtered);

// Show result
echo "A. Array of number 1 until 20 : ";
echo "
<pre>" . print_r($array, true) . "</pre>";

echo "B. Array after delete number multiple 3 : ";
echo "
<pre>" . print_r($filtered, true) . "</pre>";

echo "C. Total element after delete : " . $count;
?>