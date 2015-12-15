<?php include 'header.php'; ?>
<?php #session_name('fan'); ?>
<?php session_start(); ?>
	<?php
      if(!isset($_SESSION['gameleader'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGameleader.php");
             
?> 
<?php 
include 'connection.php';
$temp = $_GET['teamname'];

if(isset($_GET['teamname']))
    {
    $sql="SELECT teamname, division, picture, info FROM Team WHERE teamname='". $temp ."'";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
    $teamname=$row["teamname"];
    $division=$row["division"];
    $picture=$row["picture"];
    $info=$row["info"];
}
?>


	<div id="main">
		<div id="resultatskottform">
			<h2>Ta bort lag</h2>
			<hr/>
			<form action="deleteTeamsSql.php" method="post">
				<label> Lagnamn:</label>
				<input type="text" name="teamname" id="teamname" readonly value="<?php echo $teamname; ?>"/><br/>
				<label> Division:</label>
				<input type="text" name="division" id="division" readonly value="<?php echo $division; ?>"/><br/>
				<label>Information:</label>
				<input type="text" name="info" id="info" readonly value="<?php echo $info; ?>" /><br/>
				<input type="submit" value=" Ta bort " name="submit"/><br />
			</form>
		</div>


<?php include 'footer.php'; ?>