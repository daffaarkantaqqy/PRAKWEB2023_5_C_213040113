<?php

class Produk {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Jurnalrisa";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "PointBlank";
// $produk2->tambahProperty = "test";
// var_dump($produk2->judul);

$produk3 =new Produk();
$produk3->judul = "Terror Liburan Sekolah";
$produk3->penulis = "Risa Saraswati";
$produk3->penerbit = "Bukune";
$produk3->harga = 45000;

$produk4 =new Produk();
$produk4->judul = "Five Night at edi";
$produk4->penulis = "Scott Chawton";
$produk4->penerbit = "Scottgames";
$produk4->harga = 350000;

echo  "Novel : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();