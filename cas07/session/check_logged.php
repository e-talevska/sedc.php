<?php
require 'db.php';
session_start();
//ako korisnikot ne e logiran
if(!isset($_SESSION['logged_in'])) {
    if(isset($_COOKIE['logged_in'])) {
        $_SESSION['logged_in'] = $_COOKIE['logged_in'];
        $_SESSION['username'] = $users[$_COOKIE['logged_in']]['username'];
    } else {
        header("Location: login.php");
        exit;
    }
}
?>