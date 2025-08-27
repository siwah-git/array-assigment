<?php

class PenjualanAnalyzer {

    private array $data;

    public function __construct(array $penjualanArray) {
        $this->data = $penjualanArray;
    }

    public function hitungTotalPenjualan(): int {
        $total = 0;
        foreach ($this->data as $item) {
            $total += $item['total'];
        }
        return $total;
    }

    public function cariBulanPenjualanTertinggi(): string {
        $maxTotal = 0;
        $bulanTertinggi = "";

        foreach ($this->data as $item) {
            if ($item['total'] > $maxTotal) {
                $maxTotal = $item['total'];
                $bulanTertinggi = $item['bulan'];
            }
        }
        return $bulanTertinggi;
    }
}