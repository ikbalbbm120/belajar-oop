<?php
//property

// class produk {
//     public $judul = "judul",
//         $penulis  = "penulis",
//         $penerbit = "penerbit",
//         $harga = 0;
// }
// $produk1 = new produk();
// $produk1->judul = "doraemon";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "pb";
// var_dump($produk2);

// $produk3 = new produk();
// $produk3->judul = "doraemon";
// $produk3->penulis = "ikbalganss";
// $produk3->penerbit = "cyber teknology";
// $produk3->harga = 100000;

// echo "komik : $produk3->penulis, $produk3->penerbit";

//menggunakan method
class produk {
    public $judul = "judul",
        $penulis  = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

        public function getlabel() {
            return "$this->penulis,$this->penerbit";
        }
}
$produk3 = new produk();
$produk3->judul = "doraemon";
$produk3->penulis = "ikbalganss";
$produk3->penerbit = "cyber teknology";
$produk3->harga = 100000;

$produk4 = new produk();
$produk4->judul = "lostsaga";
$produk4->penulis = "devbeloperk";
$produk4->penerbit = "gravity";
$produk4->harga = 0;
echo "komik : " .$produk3->getlabel();
echo "<br>";
echo "game : " . $produk4->getlabel();
