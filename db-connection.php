<?php

$servername = "cabsql.mysql.database.azure.com";
$username = "Saranya";
$password = "Krishna12";
$databasename = "cbsphp";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_errno();
}

?>
