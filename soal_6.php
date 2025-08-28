<?php

/**
 * Class ProductAnalyzer
 * Used to solve No. 6 about product data.
 * This class provides a method to display all product names
 * and all unique variants from a product list.
 */
class ProductAnalyzer
{

    /**
     * Display all product names and all unique variants
     * from a given product list.
     *
     * @param array $products Multidimensional array containing product data.
     * @return void
     */
    public function analyze(array $products): void
    {
        echo "--- No. 6: Product Data --- <br>";

        // Get all product names using array_column
        $productNames = array_column($products, 'name');
        echo "Product Names:<br>";
        foreach ($productNames as $name) {
            echo "- " . $name . "<br>";
        }
        echo "<br>";

        // Merge all variants into one array
        $allVariants = [];
        foreach ($products as $item) {
            $allVariants = array_merge($allVariants, $item['variants']);
        }

        // Remove duplicates to get unique variants
        $uniqueVariants = array_unique($allVariants);

        // Display unique variants
        echo "Unique Variants:<br>";
        foreach ($uniqueVariants as $variant) {
            echo "- " . $variant . "<br>";
        }
        echo "<br>";
    }
}

$products = [
    ["name" => "T-Shirt", "variants" => ["red", "blue", "black"]],
    ["name" => "Shoes", "variants" => ["white", "brown"]],
    ["name" => "Cap", "variants" => ["black"]],
];

// Create an instance of ProductAnalyzer
$analyzer = new ProductAnalyzer();

// Run the analysis method
$analyzer->analyze($products);