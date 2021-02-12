<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    //Funcion Traer todos los registos de la tabla estudiantes 
    public function getStudents()
    {
        $Students = $this->db->query("SELECT * FROM students");
        return $Students->getResult();
    }
    //Funcion Crear registro en la tabla estudiantes 
    public function createStudent($datos)
    {
        //Instanciar tabla
        $Students = $this->db->table('students');
        //Insertar datos en la tabla
        $Students->insert($datos);
        //Retornar ID de 
        return $this->db->insertID();
    }
    //Funcion traer datos de unico registro 
    public function getStudent($data)
    {
        //Instanciar tabla
        $Students =  $this->db->table('students');
        //Comparar tabla con id enviado
        $Students->where('student_id', $data);
        //Retornar array con resultados de la comparación
        return $Students->get()->getResultArray();
    }
    //Funcion actualizar registro
    public function actualizar($data, $idStudent)
    {
        //Instanciar tabla
        $Students = $this->db->table('students');
        //Actualiar datos según ID enviado
        $Students->set($data);
        $Students->where('student_id', $idStudent);
        //Actualizar registro
        return $Students->update();
    }
    //Funcion borrar registro
    public function deleteStudent($data)
    {
        //Instanciar tabla
        $Students = $this->db->table('students');
        //Comparar registro 
        $Students->where($data);
        //Eliminar Resgistro
        return $Students->delete();
    }
}
