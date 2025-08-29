<?php

/**
 * Class StockManager
 * Simple utility to manage fruit stock.
 */
class StockManager
{
    /**
     * Add a new fruit stock.
     */
    public function addStock(array $stocks, string $fruit, int $quantity): array
    {
        $stocks[$fruit] = $quantity;
        return $stocks;
    }

    /**
     * Update stock for an existing fruit.
     */
    public function updateStock(array $stocks, string $fruit, int $quantity): array
    {
        if (isset($stocks[$fruit])) {
            $stocks[$fruit] = $quantity;
        }
        return $stocks;
    }

    /**
     * Remove a fruit from stock.
     */
    public function removeStock(array $stocks, string $fruit): array
    {
        unset($stocks[$fruit]);
        return $stocks;
    }
}