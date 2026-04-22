<?php

class Kendaraan {

    final public function mesin() {
        echo "Mesin standar";
    }

}

class Mobil extends Kendaraan {

    // ❌ ERROR jika override method final
    /*
    public function mesin() {
        echo "Mesin mobil";
    }
    */

}

// Contoh penggunaan
$m = new Mobil();
$m->mesin(); // Output: Mesin standar

?>