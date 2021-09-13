<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class UsersModel
{
    protected $db;

    protected $table = 'users';
    protected $allowedFields = ['name', 'description'];
    protected $returnType     = 'object';

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getUser($id = null)
    {
        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, email, fullname, user_image, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        if ($id != null) :
            $builder->where('users.id', $id);
        endif;
        return $builder->get();
    }
    public function getRole()
    {
        $builder = $this->db->table('auth_groups');
        return $builder->get();
    }
}
