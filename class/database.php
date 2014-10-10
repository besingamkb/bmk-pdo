<?php 


class Database {
	protected $host = 'localhost';
	protected $user = 'root';
	protected $pass = '';
	protected $dbname = 'family';
	protected $db;

	public function __construct() {
		$this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
		$this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
}

?>