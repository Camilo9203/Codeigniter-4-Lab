<?php

namespace App\Controllers;

use App\Models\CoursesModel;

class Courses extends BaseController
{
    //funcion 
    public function index()
    {
        //Instanciar Modelo
        $Courses = new CoursesModel();
        //Llamar funcion del modelo cursos
        $datos = $Courses->getCourses();
        //Mensaje de sesión
        $message = ('message');
        //Declarar array con datos de los modelos
        $data = [
            "datos" => $datos,
            "message" => $message,
        ];
        //Retornar vista de cursos
        return view('courses', $data);
    }
    //Funcion creación de cursos
    public function create()
    {
        //Creación de arreglo para datos de curso
        $datos = [
            "name" => $_POST['name'],
            "description" => $_POST['description'],
        ];
        //Instanciar modelo de los cursos
        $Courses = new CoursesModel();
        //Crear registro en tabla cursos y guardar respuesta
        $request = $Courses->createCourse($datos);
        //Retornar vista según la respuesta del modelo
        if ($request > 0) {
            return redirect()->to(base_url() . '/courses')->with('message', '1');
        } else {
            return redirect()->to(base_url() . '/courses')->with('message', '0');
        }
    }
    //Funcion vista actalizar
    public function show($idCourse)
    {
        $data = ["course_id" => $idCourse];
        $Courses = new CoursesModel();
        $request = $Courses->getCourse($data);

        $datos = ["datos" => $request];

        return view('update-course', $datos);
    }

    public function update()
    {
        $datos = [
            "name" => $_POST['name'],
            "desctription" => $_POST['desctription'],
        ];
        $idCourse = $_POST['idCourse'];

        $Courses = new CoursesModel();

        $request = $Courses->updateCourse($datos, $idCourse);

        if ($request) {
            return redirect()->to(base_url() . '/courses')->with('message', '2');
        } else {
            return redirect()->to(base_url() . '/courses')->with('message', '3');
        }
    }
    //F
    public function delete($idCourse)
    {
        $Courses = new CoursesModel();
        $data = ["id_course" => $idCourse];

        $request = $Courses->deleteCourse($data);

        if ($request) {
            return redirect()->to(base_url() . '/courses')->with('message', '4');
        } else {
            return redirect()->to(base_url() . '/courses')->with('message', '5');
        }
    }
}
