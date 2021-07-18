<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'rekening' 		=> [
				'type'           => 'CHAR',
				'constraint'     => '20',
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1000',
			],
			'nomer' => [
				'type' => 'VARCHAR',
				'constraint' => '1000',
			],
			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'level' 	=> [
				'type' => 'ENUM("SuperAdmin", "admin", "driver", "user") NOT NULL',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]

		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
