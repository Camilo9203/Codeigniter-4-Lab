<?php

namespace App\Controllers;

use App\Models\Users;

class Home extends BaseController
{
	public function index()
	{
		$message = session('message');
		return view('home', ["message" => $message]);
	}

	public function welcome()
	{
		return view('welcome');
	}
	public function login()
	{


		// Traer datos post
		$user = $this->request->getPost('username');

		$password = $this->request->getPost('password');

		$User = new Users;
		$dataUser = $User->getUser(['user' => $user]);

		// Comprobar datos de usuario
		if (
			count($dataUser) > 0 &&
			password_verify($password, $dataUser[0]['password'])
		) {

			// Creación de Sessión
			$data = [
				"user" => $dataUser[0]['user'],
				"type" => $dataUser[0]['type']
			];
			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/welcome'))->with('message', 'Bienvenido');
		} else {
			return redirect()->to(base_url('/'))->with('message', $password);
		}
	}
	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}
