<?php
namespace blog;
ini_set("display_errors", "On");
define("DB_HOST", "localhost");
define("DB_USER", "admin");
define("DB_PASS", "password");
define("DB_NAME", "blog");

class MySQL {
	private $mysql;
	function __construct() {
		$this->mysql = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if($this->mysql->connect_errno) {
			throw new \Exception($this->mysql->connect_error);
		}
	}
	
	function read($table) {
		$query = "SELECT * FROM $table";
		$result = $this->mysql->query($query);
		
		if($result == FALSE) {
			var_dump($this->mysql->error);
			return NULL;
		}
		
		$return = [];
		while($row = $result->fetch_assoc()) {
			$return[] = $row;
		}
		
		$result->free_result();
		return $return;
	}
	
	public function __destruct() {
		$this->mysql->close();
	}
	
	public function insertMenuItem($name, $position, $visible) {
		$query = "INSERT INTO menu_items (name, position, visible) VALUES ('$name', $position, $visible);";
		$result = $this->mysql->query($query);
		var_dump($result);
	}
	
	public function updateMenuItem($id, $values) {
		$query = "update menu_items set ";
		foreach ($values as $key => $value) {
			if(is_numeric($value)) $query .= "$key = $value, ";
			else $query .= "$key = '$value', ";
		}
		$query = substr($query, 0, strlen($query) -2);
		$query .= "where id = $id";
		return $this->mysql->query($query);
	}
	public function delete($data, $table) {
		$query = "delete from $table where";
			if(isset($data['id'])) {
				$query.=" id = {$data['id']},";
			} else if(isset($data['position'])) {
				$query.=" position = {$data['position']},";
			} else if(isset($data['name'])) {
				$query.=" name = '{$data['name']}',";
			} else {
				throw new Exception("Please enter the data to be deleted.");
				exit();
			}
		$query = substr($query, 0, strlen($query) -1);
		var_dump($query);
		return $this->mysql->query($query);
	}
}