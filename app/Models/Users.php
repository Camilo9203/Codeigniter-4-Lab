<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{

    public function getUser($data)
    {
        $User = $this->db->table('users');
        $User->where($data);
        return $User->get()->getResultArray();
    }
}
