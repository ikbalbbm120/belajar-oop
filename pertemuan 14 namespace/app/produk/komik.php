<?php namespace app\produk;

class komik extends produk implements infoproduk {


    public $jmlhalaman;
    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga = 100000);
        $this->jmlhalaman = $jmlhalaman;
    }
        
    public function getinfoproduk() {
        $str = "komik : ". $this->getinfo() ."{$this->jmlhalaman} halaman.";
        return $str;
    }
}