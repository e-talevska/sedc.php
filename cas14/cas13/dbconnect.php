<?php
namespace blog;
define ("DB_HOST", "localhost" );
define ("DB_USER", "admin");
define ("DB_PASS", "pass123");
define ("DB_NAME", "blog");

class MySQL {
    private $mysql;
    function __construct(){
        $this->mysql = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME );
        if($this->mysql->connect_errno){
            throw new 
        }
    }
}

?>
