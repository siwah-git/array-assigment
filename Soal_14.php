<?php

class ArrayModifier {

    private array $data;

    public function __construct(array $inputArray) {
        $this->data = $inputArray;
    }

    public function toUpperCase(): array {
        return array_map('strtoupper', $this->data);
    }

    public function removeSecondElement(array $array): array {
        unset($array[1]);
        return array_values($array);
    }
}