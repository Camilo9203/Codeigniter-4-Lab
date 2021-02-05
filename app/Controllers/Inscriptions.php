<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InscriptionsModel;


class Inscriptions extends BaseController
{

	// show inscriptiop list
	public function index()
	{
		$inscriptionModel = new InscriptionsModel();
		$data['inscriptions'] = $inscriptionModel->orderBy('id', 'DESC')->findAll();
		return $data;
	}

	//Funcion creación de inscripciones
	public function create()
	{
		//Creación de arreglo para datos de curso
		$datos = [
			"id_course" => $_POST['id_course'],
			"id_student" => $_POST['id_student'],
		];
		//Instanciar modelo de los inscripciones
		$Inscriptions = new InscriptionsModel();
		//Crear registro en tabla inscripciones y guardar respuesta
		$request = $Inscriptions->createCourse($datos);
		//Retornar vista según la respuesta del modelo
		if ($request > 0) {
			return redirect()->to(base_url() . '/welcome')->with('message', '1');
		} else {
			return redirect()->to(base_url() . '/welcome')->with('message', '0');
		}
	}
}
