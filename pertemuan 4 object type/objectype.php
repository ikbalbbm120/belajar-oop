<?php
//construcktor
class produk {
    public $judul,
        $penulis,
        $penerbit,
        $harga;

        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getlabel() {
            return "$this->penulis,$this->penerbit";
        }
}

class cetakinfoproduk {
    public function cetak( produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()},(Rp {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("doraemon","ikbalganss","cyberteknologi", 100000);

$produk2 = new produk("lostsaga","developerk", "gravity", 0);

echo "komik : " .$produk1->getlabel();
echo "<br>";
echo "game : " . $produk2->getlabel();
echo "<br>";
$infoproduk1 = new cetakinfoproduk();
echo $infoproduk1->cetak($produk2);

