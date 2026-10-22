<?php

class produk{
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok

    //constant
    public const pajak = 0.11;


}

//object
$produk = new produk ();
$produk->kode = 'p0001';
$produk->nama = 'laptop'
$produk->harga = 100000;
$produk->stok = 5;

//hitung pajak
$pajak = produk::pajak * 100; //11%
$jumlahpajak = $produk->harga * produk::pajak; //tambahkan 1, 1 j

//total
$total = produk->harga + $jumlahpajak;

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: ". $produk->harga;
echo "<br/>";

echo "stok: ". produk->stok;
echo "<br/>";

echo "pajak: ". $pajak;
echo "<br/>";
echo "<br/>";
echo "total harga setelah pajak:" Rp.". $total;