<?php
include 'connection.php';

$sql = "INSERT INTO ResultListTech (teamname, pname, time, division)
VALUES('".$_POST["teamname"]."','".$_POST["pname"]."','".$_POST["time"]."','".$_POST["division"]."')";

if ($conn->query($sql) === TRUE) {
	echo "<script type= 'text/javascript'>alert('New result created successfully');</script>";
} else {
	echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
header("Location: http://grupp5.icsweb.se/UPHP/addResult.php");
?>