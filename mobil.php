<?php
$koneksi = new PDO ('mysql:localhost;dbname=mobil','root','');
    
    class mobil {
        public $merk="civic";
        public $tahunProduksi= 2010;
        public $warna= "hitam";
        public $kecepatan= 90;

    }
        $mobil_1 = new mobil();
        echo $mobil_1->merk= "civic";
        echo "<br/>";
       
        echo $mobil_1->tahunProduksi= 2010;
        echo "<br/>";

        echo $mobil_1->warna= "hitam";
        echo "<br/>";

        echo $mobil_1->kecepatan= 90;
        echo "<br/>";




        