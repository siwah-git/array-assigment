<?php
/**
 * class Question3
 * displays a series of stationery from the $stationary 
 * find and display the emptystock
 * sort items by highest price
 */
class Question3 {
    /**
     * $stationary
     *
     * @var array $stationary
     * store items in array form
     */
    private $stationery;
    /**
     * constructor
     *
     * @param  array $stationerys
     */
    public function __construct(array $stationerys) {//Save the number data into the property class
        $this->stationery = $stationerys;

    }
    /**
     * emptyStock
     * display items with stock 0
     * 
     * @return array List of out of stock = 0
     */
    public function emptyStock() {
        $result = [];//accommodates stationery with stock = 0
        foreach ($this->stationery as $allitem) {//check items whose stock = 0
            if ($allitem["stock"] == 0) {
                $result[] = $allitem;//save to result
            }
        }
        return $result;//returns an array with items whose stock is 0
    }

    /**
     * sortbyHighestPrice
     *
     * @return array List of items sorted descending by price
     */
    public function sortbyHighestPrice() {
        $data = $this->stationery; //retrieve data from $stationary, data is true
        usort($data, function($a, $b) {
            return $b["price"] <=> $a["price"]; //compare prices
        });
        return $data;//return data with sorted results
    }

}
?>