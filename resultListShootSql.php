<?php include 'header.php'; ?>
	<?php 
		include 'connection.php';
	if(isset($_POST["submit"])){


	$sql = "INSERT INTO ResultListShoot (teamname, pname, points, division)
	VALUES('".$_POST["teamname"]."','".$_POST["pname"]."','".$_POST["points"]."','".$_POST["division"]."')";

	if (mysqli_query($conn, $sql)) {
		echo 'New result created successfully';
	} else {
		echo 'Error';
	}
}
header("Location: http://grupp5.icsweb.se/UPHP/addResult.php");
?>
<?php include 'footer.php'; ?>