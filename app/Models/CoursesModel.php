<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
    // Mostrar Datos
    public function getCourses()
    {
        $Courses = $this->db->query("SELECT * FROM courses");
        return $Courses->getResult();
    }
    // Crear Datos
    public function createCourse($datos)
    {
        $Courses = $this->db->table('courses');
        $Courses->insert($datos);

        return $this->db->insert();
    }

    public function getCourse($data)
    {
        $Courses =  $this->db->table('courses');
        $Courses->where($data);
        return $Courses->get()->getResultArray();
    }

    public function updateCourse($data, $idCourse)
    {
        $Courses = $this->db->table('courses');
        $Courses->set($data);
        $Courses->where('id_nombre', $idCourse);
        return $Courses->update();
    }

    public function deleteCourse($data)
    {
        $Courses = $this->db->table('courses');
        $Courses->where($data);
        return $Courses->delete();
    }
}
