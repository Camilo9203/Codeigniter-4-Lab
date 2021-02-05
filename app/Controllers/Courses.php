<?php

namespace App\Controllers;

use App\Models\CoursesModel;

class Courses extends BaseController
{
    public function index()
    {
        $Crud = new CoursesModel();
        $datos = $Crud->getCourses();
        $data = [
            "datos" => $datos
        ];
        return json_encode($data);
    }
    public function create()
    {
        $datos = [
            "name" => $_POST['name'],
            "desctription" => $_POST['description'],
        ];
        $Crud = new CoursesModel();
        $request = $Crud->createCourse($datos);

        if ($request > 0) {
            return redirect()->to(base_url() . '/welcomewelcome')->with('mensaje', 'Curso creado con exito');
        } else {
            return redirect()->to(base_url() . '/welcomewelcome')->with('mensaje', 'Error al crear los datos');
        }
    }

    public function getcourse($idCourse)
    {
        $data = ["id_course" => $idCourse];
        $Crud = new CoursesModel();
        $request = $Crud->getCourse($data);

        $datos = ["datos" => $request];

        return view('actualizar', $datos);
    }

    public function update()
    {
        $datos = [
            "name" => $_POST['name'],
            "desctription" => $_POST['desctription'],
        ];
        $idCourse = $_POST['idCourse'];

        $Crud = new CoursesModel();

        $request = $Crud->updateCourse($datos, $idCourse);

        if ($request) {
            return redirect()->to(base_url() . '/welcome')->with('mensaje', '2');
        } else {
            return redirect()->to(base_url() . '/welcome')->with('mensaje', '3');
        }
    }

    public function delete($idCourse)
    {
        $Crud = new CoursesModel();
        $data = ["id_course" => $idCourse];

        $request = $Crud->deleteCourse($data);

        if ($request) {
            return redirect()->to(base_url() . '/welcome')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/welcome')->with('mensaje', '5');
        }
    }
}
