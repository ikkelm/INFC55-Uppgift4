<?php
$host = "mysqlsemi1.space2u.com";
$username = "d36234-db5";
$password = "c2t5x4NM";
$dbname = "d36234_db5";
/*
$host = '127.0.0.1';
$username = "mikkel";
$password = "mikkel";
$dbname = "lokallokal2";*/


// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
//secho 'Connected successfully <br>';


?>