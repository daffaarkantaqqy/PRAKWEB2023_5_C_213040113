<?php

class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit",
        $harga = 0, $jmHalaman = 0, $waktuMain = 0, $tipe ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmHalaman = $jmHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // Novel : Teror Liburan Sekolah | Risa Saraswati, Bukune (Rp. 45.000) - 60 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} 
        (Rp. {$this->harga})";
        if( $this->tipe == "Novel"){
            $str .= " - {$this->jmHalaman} Halaman. ";
        } else if( $this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain}";
        }

        return $str;
    }

}

class CetakInfoProduk {
    public function cetak( Produk $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 =new Produk("Terror Liburan Sekolah", "Risa Saraswati", "Bukune", 45000, 60, 0,
"Novel");
$produk2 =new Produk("Five Night at edi", "Scott Chawton", "Scotgames", 350000, 0, 30,
"Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

