<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "mychat");
    
    $con = mysqli_connect("localhost", "root", "", "mychat") or die("Connection was not established");
?>