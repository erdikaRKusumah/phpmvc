<?php 

class Mahasiswa_model {
	// private $mhs = [
	// 	["nama" => "Erdika Rhamadan Kusumah",
	// 	"nrp" => "173040002",
	// 	"email" => "erdika@unpas.com",
	// 	"jurusan" => "Teknik Informatika"
	// 	],

	// 	["nama" => "Yogi Nugraha",
	// 	"nrp" => "173040001",
	// 	"email" => "yogi@unpas.com",
	// 	"jurusan" => "Teknik Informatika"
	// 	],

	// 	["nama" => "Indrawansyah Prasetyo",
	// 	"nrp" => "173040003",
	// 	"email" => "indra@unpas.com",
	// 	"jurusan" => "Teknik Informatika"
	// 	]
	// ];


	private $table = 'mahasiswa';
	private $db;

	public function __construct() {

		$this->db = new Database;

	}

	public function getAllMahasiswa() {
	
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id) {

		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}
}