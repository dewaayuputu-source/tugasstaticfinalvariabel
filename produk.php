<?php

class Produk {
    public static $jumlahProduk = 0;

    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::$jumlahProduk++;
    }

    public function tampilkanProduk() {
        echo "Nama: " . $this->nama . " | Harga: Rp" . $this->harga . "<br>";
    }
}

class Transaksi {
    final public function prosesTransaksi($produkList) {
        echo "<h3>Transaksi diproses:</h3>";
        $total = 0;

        foreach ($produkList as $produk) {
            $produk->tampilkanProduk();
            $total += $produk->harga;
        }

        echo "<br>Total Bayar: Rp" . $total . "<br>";
    }
}

// =======================
// Membuat minimal 3 produk
// =======================

$p1 = new Produk("Laptop", 7000000);
$p2 = new Produk("Mouse", 150000);
$p3 = new Produk("Keyboard", 300000);

// Simpan ke array
$daftarProduk = [$p1, $p2, $p3];

// =======================
// Tampilkan total produk
// =======================

echo "<h3>Total Produk: " . Produk::$jumlahProduk . "</h3><br>";

// =======================
// Simulasi transaksi
// =======================

$transaksi = new Transaksi();
$transaksi->prosesTransaksi($daftarProduk);

?>