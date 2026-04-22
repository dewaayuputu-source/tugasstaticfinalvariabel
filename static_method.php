<?php

class Matematika {

    public static function tambah($a, $b) {
        return $a + $b;
    }

}

// Memanggil method static tanpa membuat objek
echo Matematika::tambah(5, 3); // Output: 8

?>