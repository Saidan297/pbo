<?php

namespace Pbo\Marketplace;

require_once('./property_constant.php');

use Pbo\Marketplace\Produk;

class jasa {

    use produk;
    public function payment($tipe){

        return match($tipe) {
            "virtual" => "virtual account",
            "qris" => "QRIS",
            default => "hanya bisa va dan qris"
        };

    }

}