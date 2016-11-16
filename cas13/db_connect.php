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
        
        while($row = $result->fetch_row()) {
            var_dump($row);
        }
        
    }
    
    public function __destruct() {
        $this->mysql->close();
    }
}
?>