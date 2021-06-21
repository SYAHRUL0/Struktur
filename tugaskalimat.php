<?php

$kalimat = "halo halo saya dari mana mau halo aja lupa mau angkat telepon";

echo $kalimat;

echo "<br>";

$jumlah_karakter =count(explode(" ",$kalimat));

echo "jumlah kata = ".$jumlah_karakter; 

echo "<br>" ;

$hitung = substr_count("halo halo saya dari mana mau halo aja","halo" );

echo "kata yg dicari adalah halo berjumlah = " .$hitung ;

echo "<br>";
$kalimatbaru = array ("halo","halo","saya","dari","mana","mau","halo","aja","lupa","mau","angkat","telepon");
sort ($kalimatbaru);
echo " kalimat nya klo dibalik jadi gini gais =  ";
print_r($kalimatbaru);










?>