<?php
//construcktor
class produk {
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

        public function __construct($judul, $penulis, $penerbit, $harga = 0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga; 
        }

        public function setjudul( $judul ) {
            $this->judul = $judul;
        }

        public function getjudul() {
            return $this->judul;
        }

        public function setpenulis($penulis) {
            $this->penulis = $penulis;
        }
        
        public function getpenulis() {
            return $this->penulis;
        }

        public function setpenerbit($penerbit) {
            $this->penerbit =$penerbit;
        }

        public function getpenerbit() {
            return $this->penerbit;
        }

            public function setdiskon($diskon) {
                $this->diskon = $diskon;
            }

            public function getdiskon() {
                return $this->diskon;
            }

            public function setharga($harga) {
                $this->harga = $harga;
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
$produk1->setdiskon(40);
echo $produk1->getharga();
echo "<hr>";
$produk1->setpenulis("adam");
echo $produk1->getpenulis();