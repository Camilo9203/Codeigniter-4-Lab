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

    public function addStudent($data)
    {
        return $this->db->insert('users', $data);
    }
    public function updateUser($id, $field)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $field);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
