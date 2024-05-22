<?php
// Array dengan nama dan umur
$data = array(
    array("nama" => "prada", "umur" => 15),
    array("nama" => "nopal", "umur" => 60),
    array("nama" => "rendi", "umur" => 35),
    array("nama" => "tito", "umur" => 20),
    array("nama" => "amro", "umur" => 28),
    array("nama" => "rizal", "umur" => 32),
    array("nama" => "dimas", "umur" => 27),
    array("nama" => "fahrul", "umur" => 22),
    array("nama" => "angger", "umur" => 40),
    array("nama" => "alfindo", "umur" => 26),
    array("nama" => "frezaa", "umur" => 29),
    array("nama" => "dion", "umur" => 33),
    array("nama" => "hikmal", "umur" => 24),
    array("nama" => "rangga", "umur" => 31),
    array("nama" => "irsyat", "umur" => 37)
);

// Konversi array menjadi JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $json_data;