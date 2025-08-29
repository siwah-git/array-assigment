<?php
/**
 * Class used to calculate total sales and find the month with the highest sales.
 */
class SalesAnalyzer
{
    /**
     * @var array $data Sales data array, where each element is an array with 'Month' (string) and 'total' (int) keys.
     */
    private array $data;

    /**
     * @param array $salesArray Array of sales data to be analyzed.
     */
    public function __construct(array $salesArray)
    {
        $this->data = $salesArray;
    }

    /**
     * Method to calculate total sales from all data.
     * @return int Total sales.
     */
    public function countTotalSales(): int
    {
        $total = 0;
        foreach ($this->data as $saleRecord) {
            $total += $saleRecord['total'] ?? 0;
        }
        return $total;
    }

    /**
     * Method to find the month with the highest total sales.
     * @return mixed The name of the month with the highest sales.
     */
    public function searchHighestSalesMonth(): mixed
    {
        $max = max(array_values(array_column($this->data, 'total')));
        foreach ($this->data as $saleRecord) {
            if (($saleRecord['total'] ?? 0) === $max) {
                return $saleRecord['Month'];
            }
        }
    }
}