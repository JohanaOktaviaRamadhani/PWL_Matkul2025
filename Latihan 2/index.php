<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$matkul_1 = new MataKuliah();
$matkul_2 = new MataKuliah();

$matkul_1->setData("A11.4488", "Pemrograman Berbasis Web");
$matkul_2->setData("A11.4408", "Pemrograman Web Lanjut");

$mahasiswa_1->setData("A11.2023.15024", "Johana Oktavia Ramadhani", [$matkul_1, $matkul_2]);

echo "<pre>";
print_r($mahasiswa_1);
print_r($mahasiswa_1->nama);
print_r($mahasiswa_1->nim);
echo "</pre>";
