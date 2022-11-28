<?php
//construcktor
abstract class produk {
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
        
        abstract public function getinfoproduk();
        public function getinfo() {
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
        $str = "komik : ". $this->getinfo() ."{$this->jmlhalaman} halaman.";
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

            $str = "game : ". $this->getinfo() ."{$this->waktumain} jam.";
            return $str;
        }
    }
}
class cetakinfoproduk {
public $daftarproduk = array();

    public function tambahproduk(produk $produk) {
        $this->daftarproduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarproduk as $p) {
            $str .= "- {$p->getinfoproduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new komik("doraemon","ikbalganss","cyberteknologi", 100000, 200);

$produk2 = new game("lostsaga","developerk", "gravity", 300000, 1);

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk(($produk1));
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->cetak();