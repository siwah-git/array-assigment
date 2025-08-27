<?php

class ArraySorter {

    private array $data;

    public function __construct(array $data) {
        $this->data = $data;
    }

    public function sortValues(): array {
        $sortedData = $this->data;
        asort($sortedData);
        return $sortedData;
    }

    public function calculateDifference(): int {
        $smallest = min($this->data);
        $largest = max($this->data);
        return $largest - $smallest;
    }
}

?>