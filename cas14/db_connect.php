<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "labvezbi");

function doesExist($username){
    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $username = $mysql->real_escape_string($username);
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $mysql->query($query);
    $mysql->close();
    if($result->fetch_assoc()){
        $result->free_result();
        return TRUE;
        
    }
    return FALSE;
}
function insertUser($first_name, $last_name, $password, $username){
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $first_name = mysqli_real_escape_string($link, $first_name);
    $last_name = mysqli_real_escape_string($link, $last_name);
    $password = sha1($password); 
    $username = mysqli_real_escape_string($link,$username);
    var_dump($first_name, $last_name, $password, $username);
    $query = "INSERT INTO users (first_name, last_name, password, username) ";
    $query .= "VALUES('$first_name','$last_name ','$password','$username')";
    
    $result = mysqli_query($link, $query);
    var_dump(mysqli_error($link));
    mysqli_close($link);
    return $result;
    
}
?>
