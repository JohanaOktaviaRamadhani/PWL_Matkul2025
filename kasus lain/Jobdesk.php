<?php
class Jobdesk
{
    private $kode;
    private $nama;

    public function setData($kode, $nama)
    {
        $this->kode = $kode;
        $this->nama = $nama;
    }

    public function getData()
    {
        return [
            "kode" => $this->kode,
            "nama" => $this->nama,
        ];
    }
}
