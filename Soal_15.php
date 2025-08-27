<?php
/**
 * Class used to calculate total sales and find the month with the highest sales.
 */
class SalesAnalyzer {
    /**
     * @var $data sales data array
     */
    private array $data;

    /**
     * @param array $salesArray Array of sales data to be analyzed
     */
    public function __construct(array $salesArray) {
        $this->data = $salesArray;
    }

    /**
     * Method to calculate total sales from all data.
     * @return int total sales
     */
    public function countTotalSales(): int {
        $total = 0;
        foreach ($this->data as $item) {
            $total += $item['total'] ?? 0;
        }
        return $total;
    }

    /**
     * Method to Finds the month with the highest total sales.
     * @return string The name of the month with the highest sales.
     */
    public function searchHighestSalesMonth(): string { 
        if (empty($this->data)) {
            return "";
        }
        
        $firstItem = reset($this->data);
        $maxTotal = $firstItem['total'] ?? 0;
        $highestSalesMonth = $firstItem['Month'] ?? "";
        
        foreach ($this->data as $item) {
            if (isset($item['total']) && $item['total'] > $maxTotal) {
                $maxTotal = $item['total']; 
                $highestSalesMonth = $item['Month'];
            }
        }
        return $highestSalesMonth;
    }
}

?>