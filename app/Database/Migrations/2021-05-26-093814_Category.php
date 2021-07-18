<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
			],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'status' => [
				'type' => "ENUM('Active','Inactive')",
			],
		]);

		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('category');
	}

	public function down()
	{
		$this->forge->dropTable('category');
	}
}
