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
        echo "Products: <br>";
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
        // remove duplicates so each variant only shows up once
        $unique = array_unique($variants);

        // print them out, one per line
        echo "Variants:<br>";
        foreach ($unique as $variant) {
            echo "- {$variant}<br>";
        }
    }
}