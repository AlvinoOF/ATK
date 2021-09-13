<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerimaanATKModel extends Model
{
    protected $table = 'tbl_penerimaan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pesan', 'tgl_terima', 'id_user', 'id_penerimaan', 'id_det_pemesanan', 'jumlah'];

    public function getDetailPenerimaan($id_penerimaan)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_det_penerimaan');

        return $builder->where(['id_penerimaan' => $id_penerimaan])
            ->get()->getResult();
    }
}
