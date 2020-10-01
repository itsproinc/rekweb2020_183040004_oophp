<?php

abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenulis($penulis): void
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit): void
    {
        $this->penerbit = $penerbit;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon(int $diskon): void
    {
        $this->diskon = $diskon;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public abstract function getInfo();

}
