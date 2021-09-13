<?php

namespace App\Models;

use CodeIgniter\Model;

class AtkKurangModel extends Model
{
    protected $table = 'tbl_atk_kurang';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_det_permintaan', 'id_atk', 'jumlah'];
}
