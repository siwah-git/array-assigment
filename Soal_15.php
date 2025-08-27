<?php

class SalesAnalyzer {

    private array $data;

    public function __construct(array $salesArray) {
        $this->data = $salesArray;
    }

    public function countTotalSales(): int {
        $total = 0;
        foreach ($this->data as $item) {
            // Menggunakan operator null coalescing (??) untuk mencegah error
            // jika kunci 'total' tidak ada.
            $total += $item['total'] ?? 0;
        }
        return $total;
    }

    public function searchHighestSalesMonth(): string {
        // Tangani kasus array kosong.
        if (empty($this->data)) {
            return "";
        }
        
        // Inisialisasi dengan data dari item pertama sebagai titik awal.
        // Ini lebih baik daripada menginisialisasi dengan 0.
        $firstItem = reset($this->data);
        $maxTotal = $firstItem['total'] ?? 0;
        $highestSalesMonth = $firstItem['Month'] ?? "";
        
        // Mulai perulangan dari item kedua untuk membandingkan
        foreach ($this->data as $item) {
            // Pastikan kunci 'total' ada dan nilainya lebih besar
            if (isset($item['total']) && $item['total'] > $maxTotal) {
                // Perbarui maxTotal dengan nilai yang lebih besar
                $maxTotal = $item['total']; 
                // Perbarui bulan dengan penjualan tertinggi
                $highestSalesMonth = $item['Month'];
            }
        }
        return $highestSalesMonth;
    }
}

?>