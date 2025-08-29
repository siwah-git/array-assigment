<?php
/**
 * Class ProductAnalyzer
 * Used to display all product names
 * and all unique variants from a product list.
 */
class ProductAnalyzer
{
    /**
     * Displays all product names and unique variants.
     *
     * @param array $products Multidimensional array of products.
     * @return void
     */
    public function analyze(array $products): void
    {
        echo "--- No. 6: Product Data --- <br>";

        // Get all product names
        $productNames = array_column($products, 'name');
        echo "Product Names:<br>";
        foreach ($productNames as $name) {
            echo "- " . $name . "<br>";
        }
        echo "<br>";

        // Merge all variants
        $allVariants = [];
        foreach ($products as $item) {
            $allVariants = array_merge($allVariants, $item['variants']);
        }

        // Remove duplicates
        $uniqueVariants = array_unique($allVariants);

        // Display unique variants
        echo "Unique Variants:<br>";
        foreach ($uniqueVariants as $variant) {
            echo "- " . $variant . "<br>";
        }
        echo "<br>";
    }
}

?>