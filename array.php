<?php
// array merupakan fungsi untuk menampung beberapa variabel
// membuat array dengan cara lama php versi 5 kebawah
$namaHari = array("senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu");
// cara baru 
$namaBulan = ["Januari", "Febuari", "Maret", "April"];
// var_dump() = fungsi untuk menampilkan struktur array tsb
echo var_dump($namaBulan);
echo '<br>';
// sama saja seperti var_dump
print_r($namaBulan);
echo '<br>';
// menampilkan salah satu anggota array
echo $namaHari[0];
