<?php namespace app\produk;

class game extends produk implements infoproduk {


    public $waktumain;
    public function __construct($judul, $penulis, $penerbit, $harga = 0, $waktumain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga = 300000);
        $this->waktumain = $waktumain;
    }

    public function getinfoproduk() {
    {

        $str = "game : ". $this->getinfo() ."{$this->waktumain} jam.";
        return $str;
    }
}
}