<?php

/**
 * Represents a product with its name and available variants.
 */
class Product {
    /** @var string The name of the product. */
    public string $name;

    /** @var string[] An array of available variants for the product. */
    public array $variants;

    /**
     * Constructs a new Product instance.
     *
     * @param string $name The product's name.
     * @param array $variants An array of product variants.
     */
    public function __construct(string $name, array $variants) {
        $this->name = $name;
        $this->variants = $variants;
    }
}

/**
 * Manages operations on a collection of products.
 */
class ProductManager {
    /** @var Product[] An array to hold all Product objects. */
    private array $products;

    /**
     * Constructs a new ProductManager instance with an initial set of products.
     *
     * @param array $productData The raw array of product data.
     */
    public function __construct(array $productData) {
        $this->products = $this->createProductObjects($productData);
    }

    /**
     * Converts a raw array of product data into an array of Product objects.
     *
     * @param array $productData The raw product data array.
     * @return Product[] An array of Product objects.
     */
    private function createProductObjects(array $productData): array {
        $productObjects = [];
        foreach ($productData as $data) {
            $productObjects[] = new Product($data['nama'], $data['varian']);
        }
        return $productObjects;
    }

    /**
     * Retrieves all product names from the collection.
     *
     * @return string[] An array containing the names of all products.
     */
    public function getAllProductNames(): array {
        $names = [];
        foreach ($this->products as $product) {
            $names[] = $product->name;
        }
        return $names;
    }

    /**
     * Retrieves all unique variants from all products.
     *
     * @return string[] An array of unique variant names.
     */
    public function getUniqueVariants(): array {
        $allVariants = [];
        foreach ($this->products as $product) {
            $allVariants = array_merge($allVariants, $product->variants);
        }
        return array_unique($allVariants);
    }
}

// Data as provided in the problem.
$produk = [
    ["nama" => "Kaos", "varian" => ["merah", "biru", "hitam"]],
    ["nama" => "Sepatu", "varian" => ["putih", "coklat"]],
    ["nama" => "Topi", "varian" => ["hitam"]]
];

// Instantiate the manager and process the data.
$manager = new ProductManager($produk);

// Task 1: Display all product names.
echo "All Product Names:\n";
print_r($manager->getAllProductNames());

echo "\n\n"; // Add a line break for better readability

// Task 2: Display all unique variants.
echo "All Unique Variants:\n";
print_r($manager->getUniqueVariants());