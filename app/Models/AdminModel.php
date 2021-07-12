<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['email', 'username', 'fullname', 'user_image', 'password', 'role'];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['userid' => $id])->first();
    }

    public function getAdmin($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['userid' => $id])->first();
    }
}
