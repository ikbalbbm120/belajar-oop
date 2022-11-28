<?php
//construcktor
class produk {
    public $judul,
        $penulis,
        $penerbit,
        $diskon = 0;

        private $harga;

        public function __construct($judul, $penulis, $penerbit, $harga = 0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga; 
        }

            public function setdiskon($diskon) {
                $this->diskon = $diskon;
            }
        
        public function getharga() {
            return $this->harga - ($this->harga * $this->diskon / 100); 
        }

        public function getlabel() {
            return "$this->penulis,$this->penerbit";
        }
        
        public function getinfoproduk() {
            $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ";
            return $str;
        }
}

class komik extends produk {


    public $jmlhalaman;
    public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga = 100000);
        $this->jmlhalaman = $jmlhalaman;
    }
        
    public function getinfoproduk() {
        $str = "komik : ". parent::getinfoproduk() ."{$this->jmlhalaman} halaman.";
        return $str;
    }
}
    class game extends produk {


        public $waktumain;
        public function __construct($judul, $penulis, $penerbit, $harga = 0, $waktumain = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga = 300000);
            $this->waktumain = $waktumain;
        }
        public function getinfoproduk() {
        {
            $str = "game : ". parent::getinfoproduk() ."{$this->waktumain} jam.";
            return $str;
        }
    }
}
class cetakinfoproduk {


    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()},(Rp {$produk->harga})";
        return $str;
    }
}


$produk1 = new komik("doraemon","ikbalganss","cyberteknologi", 100000, 200);

$produk2 = new game("lostsaga","developerk", "gravity", 300000, 1);

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";

$produk2->setdiskon(60);
echo $produk2->getharga();