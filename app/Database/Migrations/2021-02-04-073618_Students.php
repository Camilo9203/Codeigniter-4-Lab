<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
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
			'id_course' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'null' => TRUE
			]
		]);
		$this->forge->addKey('student_id', true);
		$this->forge->addForeignKey('id_course', 'courses', 'course_id', 'CASCADE', 'SET NULL');
		$this->forge->createTable('students');
	}

	public function down()
	{
		$this->forge->dropTable('students');
	}
}
