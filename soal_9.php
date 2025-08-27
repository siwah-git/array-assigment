<?php

/**
 * Class to handle array processing tasks, as assigned by the senior developer.
 * This class contains methods to add, update, and remove elements from an associative array.
 */
class ArrayModifier {

    /**
     * Modifies the given associative array by performing a series of operations.
     * This method handles adding new elements, updating existing ones, and removing specific elements.
     *
     * @param array $fruitArray The initial associative array of fruits and their counts.
     * @return array The final modified array after all operations.
     */
    public function modifyFruitInventory(array $fruitArray): array
    {
        // Add a new fruit, 'pisang', with a count of 4.
        $fruitArray['pisang'] = 4;

        // Update the count for 'jeruk' to 3.
        $fruitArray['jeruk'] = 3;

        // Remove the 'mangga' element completely.
        unset($fruitArray['mangga']);

        return $fruitArray;
    }
}

// =====================================
// Problem Statement
// =====================================
// Given an associative array:
// ["apel" => 3, "jeruk" => 5, "mangga" => 2]
// - Add "pisang" with a count of 4.
// - Decrease the count of "jeruk" to 3.
// - Remove "mangga" from the array.
// =====================================

// Initial fruit inventory
$initialInventory = ["apel" => 3, "jeruk" => 5, "mangga" => 2];

// Create an instance of the ArrayModifier class.
$modifier = new ArrayModifier();

// Call the method to perform the modifications.
$finalInventory = $modifier->modifyFruitInventory($initialInventory);

echo "Initial Fruit Inventory:" . PHP_EOL;
print_r($initialInventory);

echo PHP_EOL . "Final Fruit Inventory after modifications:" . PHP_EOL;
print_r($finalInventory);

?>