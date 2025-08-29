<?php
/**
 * Class used to calculate total sales and find the month with the highest sales.
 */
class SalesAnalyzer {
    /**
     * @var array $data Sales data array, where each element is an array with 'Month' (string) and 'total' (int) keys.
     */
    private array $data;

    /**
     * @param array $salesArray Array of sales data to be analyzed.
     */
    public function __construct(array $salesArray) {
        $this->data = $salesArray;
    }

    /**
     * Method to calculate total sales from all data.
     * @return int Total sales.
     */
    public function countTotalSales(): int {
        $total = 0;
        foreach ($this->data as $saleRecord) {
            $total += $saleRecord['total'] ?? 0;
        }
        return $total;
    }

    /**
     * Method to find the month with the highest total sales.
     * @return string The name of the month with the highest sales.
     */
    public function searchHighestSalesMonth(): string { 
        if (empty($this->data)) {
            return "";
        }
        
        $highestSalesMonth = "";
        $maxTotal = -1; // Initialize with a value guaranteed to be lower than any valid sale amount
        
        foreach ($this->data as $saleRecord) {
            if (isset($saleRecord['total']) && $saleRecord['total'] > $maxTotal) {
                $maxTotal = $saleRecord['total']; 
                $highestSalesMonth = $saleRecord['Month'] ?? "";
            }
        }
        return $highestSalesMonth;
    }
}
?>