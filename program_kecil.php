<?php
$hasil = array();

for ($i = 100; $i >= 1; $i--) {
    if (cekPrima($i)) {
        continue;
    }
    
$cetak = "";

    if ($i % 3 == 0) {
        $cetak .= "Foo";
    }
    if ($i % 5 == 0) {
        $cetak .= "Bar";
    }
    if (empty($cetak)) {
        $cetak = $i;
    }
    $hasil[] = $cetak;
}

echo implode(" ", $hasil);

function cekPrima($angka) {
    if ($angka <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($angka); $i++) {
        if ($angka % $i == 0) {
            return false;
        }
    }
    return true;
}
?>
