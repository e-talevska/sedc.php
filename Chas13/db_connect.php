<?php
namespace blog;
use Exception; 
use mysqli; 
define("DB_HOST", "localhost");
define("DB_USER", "admin");
define("DB_PASS", "pass123");
define("DB_NAME", "blog");

class MySQL {
    private $mysql;
    function __construct() {
        $this->mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        //if 0 => ok
        //if >0 => not ok
        if($this->mysql->connect_errno) {
            throw new Exception($this->mysql->connect_error);
        }
    }
    
    function read($table) {
        $query = "SELECT * FROM $table";
        $result = $this->mysql->query($query);

        if($result == FALSE) {
//            var_dump($this->mysql->error);
            return NULL;
        }
        
        $return = [];
        while($row = $result->fetch_assoc()) {
            $return[] = $row;
        }
        
        $result->free_result();
        
        return $return;
    }
    
    public function insertNewMenuItem($name, $position, $visible) {
        $query = "INSERT INTO menu_items ";
        $query .= "(name,position,visible) ";
        $query .= "VALUES ('$name',$position, $visible)";
        
        return $this->mysql->query($query);
    }
    
    public function deleteMenuItem($id) {
        $query = "DELETE FROM menu_items ";
        $query .= "WHERE id=$id";
        
        return $this->mysql->query($query);
    }
    /*
     * $values = [
     *  'name' => 'Vrednost',
     *  'position' => 1
     * ]
     * 
     */
    public function updateMenuItem($id, $values) {
        $query = "UPDATE menu_items SET ";
        foreach ($values as $key => $value) {
            if(is_numeric($value)) {
                $query .= "$key = $value, ";
            } else {
                $query .= "$key = '$value', ";
            }
        }
        $query = substr($query, 0, strlen($query) -2);
        $query .= " WHERE id=$id";
        
        return $this->mysql->query($query);
    }
    
    public function __destruct() {
        $this->mysql->close();
    }
}
?>