<?php

/**
 * Creates an associative array and performs a series of manipulations:
 * adding, updating, and deleting elements.
 */

// Initial associative array for fruit inventory.
$fruit_stock = ["apple" => 3, "orange" => 5, "mango" => 2];

echo "Initial Array:<br>";
print_r($fruit_stock);
echo "<br><br>";

// 1. Add "banana" with a quantity of 4.
$fruit_stock["banana"] = 4;
echo "After adding banana:<br>";
print_r($fruit_stock);
echo "<br><br>";

// 2. Reduce the stock of "orange" to 3.
$fruit_stock["orange"] = 3;
echo "After updating orange stock:<br>";
print_r($fruit_stock);
echo "<br><br>";

// 3. Remove "mango" from the array.
unset($fruit_stock["mango"]);
echo "After removing mango:<br>";
print_r($fruit_stock);
echo "<br>";