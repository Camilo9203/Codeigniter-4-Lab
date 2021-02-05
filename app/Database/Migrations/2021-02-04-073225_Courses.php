<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courses extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'course_id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'description'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			]

		]);
		$this->forge->addKey('course_id', true);
		$this->forge->createTable('courses');
	}

	public function down()
	{
		$this->forge->dropTable('courses');
	}
}
