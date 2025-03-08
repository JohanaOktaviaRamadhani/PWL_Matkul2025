<?php
include "Karyawan.php";
include "KaryawanTransfer.php";
include "Jobdesk.php";

$jobdesk_1 = new Jobdesk();
$jobdesk_2 = new Jobdesk();

$jobdesk_1->setData("1501", "Campaign sosial media");
$jobdesk_2->setData("1502", "Mengadakan bazar");

// Input nilai pekerjaan yang lebih logis
$daftargaji = [
    ["jumlah job" => 2, "hasil" => 1000000],
    ["jumlah job" => 3, "hasil" => 750000],
    ["jumlah job" => 2, "hasil" => 500000],
];

$karyawan_1 = new KaryawanTransfer($daftargaji);

$karyawan_1->setData("A11.2023.15024", "Johana Oktavia Ramadhani", [$jobdesk_1, $jobdesk_2], $karyawan_1->getgaji(), "Marketing");

echo "<pre>";
echo json_encode($karyawan_1->getData(), JSON_PRETTY_PRINT);
echo "</pre>";
