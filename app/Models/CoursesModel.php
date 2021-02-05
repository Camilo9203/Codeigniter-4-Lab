<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
    //Funcion Traer todos los registos de la tabla cursos 
    public function getCourses()
    {
        $Courses = $this->db->query("SELECT * FROM courses");
        return $Courses->getResult();
    }
    //Funcion Crear registro en la tabla cursos 
    public function createCourse($datos)
    {
        //Instanciar tabla
        $Courses = $this->db->table('courses');
        //Insertar datos en la tabla
        $Courses->insert($datos);
        //Retornar ID de 
        return $this->db->insertID();
    }
    //Funcion traer datos de unico registro 
    public function getCourse($data)
    {
        //Instanciar tabla
        $Courses =  $this->db->table('courses');
        //Comparar tabla con id enviado
        $Courses->where($data);
        //Retornar array con resultados de la comparación
        return $Courses->get()->getResultArray();
    }
    //Funcion actualizar registro
    public function updateCourse($data, $idCourse)
    {
        //Instanciar tabla
        $Courses = $this->db->table('courses');
        //Actualiar datos según ID enviado
        $Courses->set($data);
        $Courses->where('id_nombre', $idCourse);
        //Actualizar registro
        return $Courses->update();
    }
    //Funcion borrar registro
    public function deleteCourse($data)
    {
        //Instanciar tabla
        $Courses = $this->db->table('courses');
        //Comparar registro 
        $Courses->where($data);
        //Eliminar Resgistro
        return $Courses->delete();
    }
}
