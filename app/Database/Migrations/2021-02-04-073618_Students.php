<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
	//Funcion de creación de tabla estudiantes
	public function up()
	{
		$this->forge->addField([
			'student_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'phone'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],

		]);
		$this->forge->addKey('student_id', true);
		$this->forge->createTable('students');
	}

	public function down()
	{
		$this->forge->dropTable('students');
	}
}
