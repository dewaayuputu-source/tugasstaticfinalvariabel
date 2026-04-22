<?php

final class Database {

    public function connect() {
        echo "Koneksi database";
    }

}

// Membuat objek dari class Database
$db = new Database();
$db->connect();

//  ERROR jika dilakukan (karena class final tidak bisa diwariskan)
/*
class MyDB extends Database {

}
*/

?>