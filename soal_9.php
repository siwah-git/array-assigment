<?php

/**
 * A utility class for handling inventory management.
 * This is the kind of class you'd use to manipulate product lists in an application.
 */
class InventoryManager
{

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
        $inventory['banana'] = 4;

        // Next, we need to adjust the count of an existing item.
        $inventory['orange'] = 3;

        // Finally, remove an item that is no longer needed or out of stock.
        unset($inventory['mango']);

        return $inventory;
    }
}

$initialInventory = ["apple" => 3, "orange" => 5, "mango" => 2];
$manager          = new InventoryManager();

echo "--- No. 9 ---" . PHP_EOL;

// Get the final inventory after the updates.
$finalInventory = $manager->updateInventory($initialInventory);
echo "Final Fruit Inventory:" . PHP_EOL;
print_r($finalInventory);