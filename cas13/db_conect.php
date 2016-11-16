<?php
namespace blog;
define ("DB_HOST", "localhost");
define("DB_USER", "admin");
define ("DB_PASS", "pass123");
define("DB_NAME", "blog");

class MySQL {
    private $_mysql;
    function __construct() {
        $this->mysql = new \mysqli(DB_HOST, DB_USER,DB_PASS, DB_NAME) ;
        //if zero then its ok
        // if greater than zero its not ok 
        if($this->mysql->connect_errno) {
            throw new \Exception($this->mysql->connect_errno);
        }
    }
    
    function read($table) {
        $query ="SELECT*FROM $table";
      $result = $this->mysql->query($query);
     
        if($result==FALSE){
            var_damp($this->mysql->error);
            return NULL;
        }
        
        
        while ($row = $result-> fetch_assoc()){
           $return[] = $row;
        }
        $result->free_result();
        return $return;
    
    }
    public  function insertNewMenuItem($name, $position, $visable)
    {
        
        $query = "INSERT INTO menu_items";
        $query .= " (name, position, visable) ";
        $query .= "VALUES ('$name',$position,$visable)";
       
       return $this->mysql->query($query);
    }
    
    public function updateMenuItem($id,$values){
        $query ="UPDATE menu_items SET";
        foreach ($values as $key => $value) {
            if(is_numeric($value)) {
                $query .= "$key = $value, ";
            }
             else
                 {
                $query .= "$key = '$value', ";
             }
        }
                $query =  substr($query, 0, strlen($query)-2);
        $query .= " WHERE id=$id";
             
        echo $query;
    }

    public function __destruct(){
    $this->mysql->close();
    
    }
}


        
?>