<?php

namespace App\Controllers;

use App\Models\;

class Courses extends BaseController
{
    public function index()
    {
        $Crud = new CrudModel();
        $data = $Crud->getStudents();

        $data =  $this->getStudents();
        if ($query) {
            $result['users']  = $this->user->getStudents();
        }
        echo json_encode($result);
        return json_encode($data);
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
