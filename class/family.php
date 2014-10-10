<?php 

class Family extends Database {

	public function showAll($table) {
		try {
			$sql = "SELECT * FROM $table";
			$q = $this->db->prepare($sql);
			$q->execute();
			$q->setFetchMode(PDO::FETCH_OBJ);
			return $row = $q->fetchAll();
		} catch (PDOException $e) {
			die("ERROR" . $e->getMessage());
		}
	}

	public function insert($table, $data) {
		$sql = "INSERT INTO $table (fullname, age, gender) VALUES (:fullname, :age, :gender)";
		$q = $this->db->prepare($sql);
		$q->execute($data);
	}	
}

?>