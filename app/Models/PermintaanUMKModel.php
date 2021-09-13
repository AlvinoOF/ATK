<?php

namespace App\Models;

use CodeIgniter\Model;

class PermintaanUMKModel extends Model
{
    protected $table = 'tbl_umk';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'no_erp', 'tgl_umk', 'batas_pumk', 'user', 'jumlah_umk', 'sisa', 'status', 'dokumen', 'status'];

    public function getTerimaUMK($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_umk');

        return $builder->where(['id' => $id])
            ->get()->getResult();
    }

    public function saveTambahUMK()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_umk');
    }

    public function insert_upload($dokumen)
    {
        return $this->db->table('tbl_umk')->insert($dokumen);
    }
}
