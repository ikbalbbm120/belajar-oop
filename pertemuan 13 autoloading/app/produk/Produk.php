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
        public function getinfo() {
            $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ";
            return $str;
        }
}