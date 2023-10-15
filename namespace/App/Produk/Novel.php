<?php

class Novel extends Produk implements InfoProduk {
    public $jmHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",
    $harga = 0, $jmHalaman = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmHalaman = $jmHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk(){
        $str = "Novel : ". $this->getInfo() ." - {$this->jmHalaman} Halaman.";
        return $str;
    }
}