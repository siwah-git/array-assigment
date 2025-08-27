<?php

/**
 * A utility class for handling inventory management.
 * This is the kind of class you'd use to manipulate product lists in an application.
 */
class InventoryManager {

    /**
     * Updates an inventory list by performing several operations: adding new items,
     * modifying existing item counts, and removing items.
     *
     * @param array $inventory The initial associative array of items and their quantities.
     * @return array The final, modified inventory array.
     */
    public function updateInventory(array $inventory): array
    {
        // First, let's add a new item to our inventory.
        $inventory['pisang'] = 4;

        // Next, we need to adjust the count of an existing item.
        $inventory['jeruk'] = 3;

        // Finally, remove an item that is no longer needed or out of stock.
        unset($inventory['mangga']);

        return $inventory;
    }
}

// =====================================
// Main Execution
// =====================================

$initialInventory = ["apel" => 3, "jeruk" => 5, "mangga" => 2];
$manager = new InventoryManager();

echo "--- No. 9 ---" . PHP_EOL;

// Get the final inventory after the updates.
$finalInventory = $manager->updateInventory($initialInventory);
echo "Final Fruit Inventory:" . PHP_EOL;
print_r($finalInventory);

?>