<?php
    
    $banyak = 300 ;
    $hargaSatuan = 60000 ;

    if ($banyak >= 200) {
        $diskon = 0.05;
    }elseif ($banyak >= 100) {
        $diskon = 0.02;
    }else {
        $diskon = 0;
    }
    $hargaKotor = $banyak * $hargaSatuan ;
    $besarDiskon = $hargaKotor * $diskon ;
    $hargaBersih = $hargaKotor - $besarDiskon ;

    echo "Berikut Rincian Transaksi <br>";
    echo "Jumlah yang dibeli $banyak sak <br>";
    echo "Harga per-satuan : Rp.$hargaSatuan <br>" ;
    echo "Total Belanja : Rp.$hargaKotor <br>" ;
    echo "Total Diskon  : Rp.$besarDiskon <br>" ;
    echo "Harga Bersih  : Rp.$hargaBersih <br>" ;
    

?>