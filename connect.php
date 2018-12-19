<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_proceder";

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("Error to connect: ".mysqli_connect_error());
}
?>