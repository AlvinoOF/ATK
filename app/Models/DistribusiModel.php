<?php

namespace App\Models;

use CodeIgniter\Model;

class DistribusiModel extends Model
{
    protected $table = 'tbl_distribusi';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_permintaan', 'tgl_distribusi', 'id_user', 'id_dist', 'jumlah'];

    public function getDetailDistribusi($id_dist)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_distribusi');

        return $builder->where(['id_dist' => $id_dist])
            ->get()->getResult();
    }
}
