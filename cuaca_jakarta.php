<?php
$api_key    = '41d7d8fd000ef83cc270403a09450b82';
$kota       = 'Jakarta';
$url        = "http://api.openweathermap.org/data/2.5/forecast?q=$kota&cnt=5&units=metric&appid=$api_key";

$response = file_get_contents($url);

$data = json_decode($response, true);

if ($data['cod'] == 200) {
    echo "Ramalan cuaca untuk $kota untuk 5 hari ke depan:\n";
    foreach ($data['list'] as $ramalan) {
        $date   = date('Y-m-d', $ramalan['dt']);
        $suhu   = $ramalan['main']['temp'];

        echo "$date: Suhu $suhu°C";
    }
} else {
    echo "Gagal mengambil data cuaca.";
}
?>