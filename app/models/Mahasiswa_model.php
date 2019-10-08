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

	private $dbh, $stmt;

	public function __construct() {
		//data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
			$this->dbh = new PDO($dsn, 'root', '');
			
		} catch (PDOException $e) {
			die($e->getMessage());
			
		}
	}

	public function getAllMahasiswa() {
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}