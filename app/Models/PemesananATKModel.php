<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananATKModel extends Model
{
    protected $table = 'tbl_pemesanan';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_user', 'tgl_pemesanan', 'no_erp', 'status', 'id_pemesanan', 'id_atk', 'jumlah', 'harga'];

    public function getDetailPemesanan($id_det_pemesanan)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_det_pemesanan');

        return $builder->where(['id_det_pemesanan' => $id_det_pemesanan])
            ->get()->getResult();
    }
}
