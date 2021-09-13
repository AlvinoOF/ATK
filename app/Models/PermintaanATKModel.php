<?php

namespace App\Models;

use CodeIgniter\Model;

class PermintaanATKModel extends Model
{
    protected $table = 'tbl_permintaan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'tgl_permintaan', 'status', 'id_atk', 'jumlah'];

    public function getDetailPermintaan($id_det_permintaan)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_det_permintaan');

        return $builder->where(['id_det_permintaan' => $id_det_permintaan])
            ->get()->getResult();
    }
}
