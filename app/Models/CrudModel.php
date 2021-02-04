<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{

    public function getStudents()
    {
        $Students = $this->db->query("SELECT * FROM students");
        return $Students->getResult();
    }
}
