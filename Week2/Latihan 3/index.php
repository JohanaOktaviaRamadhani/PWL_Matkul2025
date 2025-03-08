<?php
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$matkul_1 = new MataKuliah();
$matkul_2 = new MataKuliah();

$matkul_1->setData("A11.4488", "Pemrograman Berbasis Web");
$matkul_2->setData("A11.4408", "Pemrograman Berbasis Web");

$mahasiswa_1->setData("A11.2023.15024", "Johana Oktavia Ramadhani", [$matkul_1, $matkul_2], "2020-02-20");

echo "<pre>";
echo "Umur dihitung dengan method/function : <br>";
print_r($mahasiswa_1->getData()[4]);
echo "<br><br>";
echo "Nilai umur diberi secara langsung : <br>";
$mahasiswa_1->umur = 100;
print_r($mahasiswa_1->umur);
echo "</pre>";