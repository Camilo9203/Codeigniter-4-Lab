<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
	public function run()
	{
		$password = password_hash("12345", PASSWORD_DEFAULT);
		$username = "camilo@email.com";
		$type = "admin";
		$data = [
			'user' =>  $username,
			'password' => $password,
			'type' => $type,
		];

		// Using Query Builder
		$this->db->table('users')->insert($data);
	}
}
