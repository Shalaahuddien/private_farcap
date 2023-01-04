<?php

//trapesium a+b x t / 2

function kali($a,$b)
{
    $hasil= $a*$b;
    return $hasil;
}

function bagi($a,$b)
{
    $hasil = $a/$b;
    return $hasil;
}

function jumlah($a,$b)
{
    $hasil = $a+$b;
    return $hasil;
}

$a = 3;
$b = 5;
$tinggi = 8;
$hasil_pertambahan = jumlah($a,$b);
$hasil_perkalian = kali($hasil_pertambahan,$tinggi);

$luas_trapesium = bagi($hasil_perkalian,2);

echo "\n trapesium=". $luas_trapesium;

$sisi= 7;

$luas_persegi= kali($sisi,$sisi);

echo "pesegi=".  $luas_persegi;

$alas= 9;
$tinggi= 5;
$hasil_perkalian = kali($alas,$tinggi);

$luas_segitiga=bagi($hasil_perkalian,2);

echo "\n segitiga=". $luas_segitiga;
