<?php

class Counter {

    public static $jumlah = 0;

    public function tambah() {
        self::$jumlah++;
    }
}

// Membuat 2 objek
$c1 = new Counter();
$c2 = new Counter();

// Memanggil method
$c1->tambah();
$c2->tambah();

// Menampilkan hasil
echo Counter::$jumlah; // Output: 2

?>