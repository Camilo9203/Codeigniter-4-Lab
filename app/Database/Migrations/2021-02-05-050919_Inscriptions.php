<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inscriptions extends Migration
{
	//Funcion de creación tabla
	public function up()
	{
		$this->forge->addField([

			'id_course' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'null' => TRUE
			],
			'id_student' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'null' => TRUE
			],

		]);
		$this->forge->addForeignKey('id_student', 'students', 'student_id', 'CASCADE', 'SET NULL');
		$this->forge->addForeignKey('id_course', 'courses', 'course_id', 'CASCADE', 'SET NULL');
		$this->forge->createTable('inscriptions');
	}
	//Función borra tabla inscriptions
	public function down()
	{
		$this->forge->dropTable('inscriptions');
	}
}
