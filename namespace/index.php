<?php

require_once 'App/init.php';

// $produk1 =new Novel("Terror Liburan Sekolah", "Risa Saraswati", "Bukune", 45000, 60,);
// $produk2 =new Game("Five Night at edi", "Scott Chawton", "Scottgames", 350000, 30,);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();











