<?php

namespace App\Controllers;

use App\Models\CoursesModel;

use App\Models\Users;

class Home extends BaseController
{
	//Funcion de incio
	public function index()
	{
		$message = session('message');
		return view('home', ["message" => $message]);
	}
	//Funcion de incio usuario registrado
	public function welcome()
	{
		//Instanciar Modelo
		$Courses = new CoursesModel();
		//Llamar funcion del modelo cursos
		$datos = $Courses->getCourses();
		//Declarar array con datos de los modelos
		$data = [
			"datos" => $datos
		];
		//Retornar vista de usuario registrado + datos de cursos
		return view('welcome', $data);
		// return json_encode($data);
	}

	//Funcion de Login 
	public function login()
	{
		// Traer datos post
		$user = $this->request->getPost('username');
		$password = $this->request->getPost('password');

		//Instanciar Modelo
		$User = new Users;
		//Llamar funcion del modelo
		$dataUser = $User->getUser(['user' => $user]);

		// Comprobar datos de usuario
		if (
			count($dataUser) > 0 &&
			password_verify($password, $dataUser[0]['password'])
		) {
			//Almacenar datos de sesión
			$data = [
				"user" => $dataUser[0]['user'],
				"type" => $dataUser[0]['type']
			];
			// Creación de sesión
			$session = session();
			$session->set($data);
			//Reedireccionamiento a pagina de incio usuario registrado
			return redirect()->to(base_url('/welcome'))->with('message', 'Bienvenido');
		} else {
			//Devuelve al inicio de no estar registrado 
			return redirect()->to(base_url('/'))->with('message', $password);
		}
	}
	//Funcion de cierre de sesión
	public function logout()
	{
		//Destruir sesisón y retornar al inicio.
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}
