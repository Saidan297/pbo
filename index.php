<?php

//panggil file propertyconstant
require('./property_constant.php');

use pbo\Marketplace\produk;
//object
$produk = new produk ('p0001', 'laptop', 10000000,5);

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";


echo "pajak: ". $produk->pajak()."%";
echo "<br/>";
echo "<br/>";
echo "total harga setelah pajak: Rp.". $produk->total();