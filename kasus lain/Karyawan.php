<?php
class Karyawan
{
    private $id, $nama, $jobdesk, $gaji, $divisi;
    protected $status;

    public function __construct()
    {
        $this->status = "Aktif";
    }

    public function setData($id, $nama, $jobdesk, $gaji, $divisi)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->jobdesk = $jobdesk;
        $this->gaji = $gaji;
        $this->divisi = $divisi;
    }

    public function getData()
    {
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "divisi" => $this->divisi,
            "jobdesk" => is_array($this->jobdesk) ? array_map(fn($j) => $j->getData(), $this->jobdesk) : [],
            "gaji" => number_format($this->gaji, 2, ',', '.'), 
            "status" => $this->status,
        ];
    }
}
