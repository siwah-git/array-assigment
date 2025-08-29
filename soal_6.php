<?php

/**
 * Class ProductAnalyzer
 * Helper to list product names and unique variants.
 */
class ProductAnalyzer
{
    /**
     * Print all product names.
     *
     * @param array $products
     * @return void
     */
    public function showNames(array $products): void
    {
        echo "<h3>Products:</h3>";
        foreach ($products as $product) {
            echo "- {$product['name']}<br>";
        }
    }

    /**
     * Print all unique variants.
     *
     * @param array $products
     * @return void
     */
    public function showVariants(array $products): void
    {
        $variants = [];

        foreach ($products as $product) {
            $variants = [ ...$variants, ...$product['variants']];
        }

        $unique = array_unique($variants);

        echo "<h3>Variants:</h3>";
        foreach ($unique as $variant) {
            echo "- {$variant}<br>";
        }
    }
}