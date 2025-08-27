<?php

class Question3 {
    private $stationery;

    public function __construct(array $stationerys) {
        $this->stationery = $stationerys;

    }

    public function emptyStock() {
        $result = [];
        foreach ($this->stationery as $allitem) {
            if ($allitem["stock"] == 0) {
                $result[] = $allitem;
            }
        }
        return $result;
    }

    public function sortbyHighestPrice() {
        $data = $this->stationery;
        usort($data, function($a, $b) {
            return $b["price"] <=> $a["price"]; // urut descending
        });
        return $data;
    }

}
?>