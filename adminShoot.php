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
			<h2>Uppdatera skottresultat</h2>
			<hr/>
			<form action="adminShootSql.php" method="post">
				<label> Name:</label>
				<input type="text" name="pname" id="pname" required="required" readonly value="<?php echo $pname; ?>"/><br/>
				<label> Lagnamn:</label>
				<input type="text" name="teamname" id="teamname" required="required" value="<?php echo $teamname; ?>"/><br/>
				<label>Divison:</label>
				<input type="text" name="division" id="division" required="required" value="<?php echo $division; ?>" /><br/>
				<label> Poäng:</label>
				<input type="text" name="points" id="points" required="required" value="<?php echo $points; ?>" /><br/>
				<input type="submit" value=" Uppdatera " name="submit"/><br />
			</form>
		</div>

<?php include 'footer.php'; ?>