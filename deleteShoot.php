<?php include 'header.php'; ?>
	
 
<?php 
include 'connection.php';
$temp = $_GET['pname'];

if(isset($_GET['pname']))
    {
    $sql="SELECT pname, division, teamname, points FROM ResultListShoot WHERE pname='". $temp ."'";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
    $pname=$row["pname"];
    $division=$row["division"];
    $teamname=$row["teamname"];
    $points=$row["points"];
}
?>


	<div id="main">
		<div id="resultatskottform">
			<h2>Ta bort skottresultat</h2>
			<hr/>
			<form action="deleteShootSql.php" method="post">
				<label> Namm:</label>
				<input type="text" name="pname" id="pname" readonly value="<?php echo $pname; ?>"/><br/>
				<label> Lagnamn:</label>
				<input type="text" name="teamname" id="teamname" readonly value="<?php echo $teamname; ?>"/><br/>
				<label>Divison:</label>
				<input type="text" name="division" id="division" readonly value="<?php echo $division; ?>" /><br/>
				<label> Poäng:</label>
				<input type="text" name="points" id="points" readonly value="<?php echo $points; ?>" /><br/>
				<input type="submit" value=" Ta bort " name="submit"/><br />
			</form>
		</div>

<?php include 'footer.php'; ?>