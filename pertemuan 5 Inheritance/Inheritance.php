<?php
//construcktor
class produk {
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlhalaman,
        $waktumain;

        public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlhalaman = 0, $waktumain = 0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlhalaman = $jmlhalaman;
            $this->waktumain = $waktumain;
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
    public function getinfoproduk() {
        $str = "komik : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} halaman.";
        return $str;
    }
    }

    class game extends produk {
        public function getinfoproduk()
        {
            $str = "game : {$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktumain} jam.";
            return $str;
        }
    }

class cetakinfoproduk {
    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()},(Rp {$produk->harga})";
        return $str;
    }
}


$produk1 = new komik("doraemon","ikbalganss","cyberteknologi", 100000, 200, 0);

$produk2 = new game("lostsaga","developerk", "gravity", 0, 0, 1);

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();