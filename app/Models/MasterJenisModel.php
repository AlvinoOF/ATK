<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterJenisModel extends Model
{
    protected $table = 'master_jenis';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_jenis'];

    // public function getAlatTulis($slug = false)
    // {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }
}
