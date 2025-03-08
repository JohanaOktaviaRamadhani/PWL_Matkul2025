<?php
class Mahasiswa
{
    private $nim, $nama, $matkul, $tgl_lahir;
    public $umur;

    public function setData($nim, $nama, $matkul, $tgl_lahir)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->tgl_lahir = $tgl_lahir;
        $this->setUmur();
    }

    public function setUmur()
    {
        $this->umur = date("Y") - substr($this->tgl_lahir, 0, 4);
    }

    public function getData()
    {
        return [
            $this->nim,
            $this->nama,
            $this->matkul,
            $this->tgl_lahir,
            $this->umur,
        ];
    }
}