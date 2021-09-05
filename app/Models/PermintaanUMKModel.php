<?php

namespace App\Models;

use CodeIgniter\Model;

class PermintaanUMKModel extends Model
{
    protected $table = 'tbl_umk';
    protected $useTimestamps = true;
    protected $allowedFields = ['no_erp', 'tgl_umk', 'batas_pumk', 'user', 'jumlah', 'sisa', 'dokumen', 'status'];

    public function getDetailPermintaan($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        return $builder->where(['id' => $id])
            ->get()->getResult();
    }
}
