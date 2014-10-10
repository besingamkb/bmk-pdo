<?php 


class Database {
	protected $host = 'localhost';
	protected $user = 'root';
	protected $pass = '';
	protected $dbname = 'family';
	protected $db;

	protected $sql_query;

	protected $result;

	public function __construct() {
		$this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
		$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}

	public function query($query = null) {
		//$this->sql_query = $query;
		$sql = ($query != null) ? $query : $this->sql_query;
		try {
			//$query
			$q = $this->prepare($sql);
			$result = $q->execute();

			$thi->result = $result;

		} catch(PDOException $e) {
			die("ERROR: " . $e->getMesage());
		}
	}

	public function select($items) {
		$this->sql_query .= "SELECT $items";
	}

	public function from($table) {
		$this->sql_query .= " FROM $table";
	}

	public function where($fields, $value) {
		$this->sql_query .= " WHERE $fields = $value";
	}

	public function get_data() {
		return $this->result;
	}


}

?>