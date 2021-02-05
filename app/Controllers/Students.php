<?php

namespace App\Controllers;

use App\Models\StudentsModel;

class Students extends BaseController
{
    //funcion 
    public function index()
    {
        //Instanciar Modelo
        $Students = new StudentsModel();
        //Llamar funcion del modelo estudiantes
        $datos = $Students->getStudents();
        //Mensaje de sesión
        $message = ('message');
        //Declarar array con datos de los modelos
        $data = [
            "datos" => $datos,
            "message" => $message,
        ];
        //Retornar vista de estudiantes
        return view('students', $data);
    }
    //Funcion creación de estudiantes
    public function create()
    {
        //Creación de arreglo para datos de curso
        $datos = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "phone" => $_POST['phone'],
        ];
        //Instanciar modelo de los estudiantes
        $Students = new StudentsModel();

        //Validación de datos
        if ($this->validate('courses')) {

            //Crear registro en tabla estudiantes y guardar respuesta
            $request = $Students->createStudent($datos);
            //Retornar vista según la respuesta del modelo
            if ($request > 0) {
                return redirect()->to(base_url() . '/students')->with('message', '1');
            } else {
                return redirect()->to(base_url() . '/students')->with('message', '0');
            }
        }
    }
    //Funcion vista actalizar
    public function show($idStudent)
    {
        $data = ["students_id" => $idStudent];
        $Students = new StudentsModel();
        $request = $Students->getStudent($data);

        $datos = ["datos" => $request];

        return view('update-students', $datos);
    }

    public function update()
    {
        $datos = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "phone" => $_POST['phone'],
        ];
        $idStudent = $_POST['idStudent'];

        $Students = new StudentsModel();

        $request = $Students->updateStudent($datos, $idStudent);

        if ($request) {
            return redirect()->to(base_url() . '/students')->with('message', '2');
        } else {
            return redirect()->to(base_url() . '/students')->with('message', '3');
        }
    }

    public function delete($idStudent)
    {
        $Students = new StudentsModel();
        $data = ["id_course" => $idStudent];

        $request = $Students->deleteStudent($data);

        if ($request) {
            return redirect()->to(base_url() . '/students')->with('message', '4');
        } else {
            return redirect()->to(base_url() . '/students')->with('message', '5');
        }
    }
}
