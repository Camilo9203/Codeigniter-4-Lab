<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $data = $Crud->getStudents();

        echo json_encode($data);
    }

    public function new()
    {
    }

    public function show()
    {
    }

    public function update()
    {
    }
    public function delete()
    {
    }
}
