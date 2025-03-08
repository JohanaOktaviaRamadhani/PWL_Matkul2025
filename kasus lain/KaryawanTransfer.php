<?php
class KaryawanTransfer extends Karyawan
{
    private $daftar_gaji, $gaji = 0, $ttl_job = 0, $ttl_bobot = 0;

    public function __construct($daftar_gaji)
    {
        parent::__construct();
        $this->daftar_gaji = $daftar_gaji;
        $this->hitungGaji();
    }

    private function hitungGaji()
    {
        $this->ttl_job = 0; 
        $this->ttl_bobot = 0;

        if (!empty($this->daftar_gaji)) {
            foreach ($this->daftar_gaji as $data) {
                $this->ttl_job += $data['jumlah job'];
                $this->ttl_bobot += $data['jumlah job'] * $data['hasil']; 
            }
            $this->gaji = ($this->ttl_job > 0) ? $this->ttl_bobot / $this->ttl_job : 0;
        } else {
            $this->gaji = 0; 
        }
    }

    public function getgaji()
    {
        return $this->gaji;
    }

    public function getData()
    {
        return array_merge(parent::getData(), [
            "daftar_gaji" => $this->daftar_gaji,
            "total_gaji" => number_format($this->gaji, 2, ',', '.'),
        ]);
    }
}
