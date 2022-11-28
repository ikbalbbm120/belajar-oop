<?php
require_once 'app/init.php';

$produk1 = new komik("doraemon","ikbalganss","cyberteknologi", 100000, 200);

$produk2 = new game("lostsaga","developerk", "gravity", 300000, 1);

$cetakproduk = new cetakinfoproduk();
$cetakproduk->tambahproduk(($produk1));
$cetakproduk->tambahproduk($produk2);
echo $cetakproduk->cetak();