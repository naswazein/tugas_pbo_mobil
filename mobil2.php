<?php
$koneksi = new PDO ('mysql:localhost;dbname=mobil','root','');

    class mobil {
        public $merk="toyota";
        public $tahunProduksi= 2012;
        public $warna= "putih";
        public $kecepatan= 70;
    }
        $mobil_2 = new mobil ();
        echo $mobil_2->merk= "toyota";
        echo "<br/>";

        echo $mobil_2->tahunProduksi= 2012;
        echo "<br/>";

        echo $mobil_2->warna= "putih";
        echo "<br/>";

        echo $mobil_2->kecepatan= 70;
        echo "<br/>";
