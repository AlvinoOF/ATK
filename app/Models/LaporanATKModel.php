<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanATKModel extends Model
{
    protected $table = 'laporan_atk';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggalLaporan', 'perihal'];

    public function getLaporanATK($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
