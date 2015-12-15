<?php include 'header.php'; ?>
<?php #session_name('fan'); ?>
<?php session_start(); ?>
	<?php
      if(isset($_SESSION['gameleader'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGameleader.php");
       

          echo $_SESSION['gameleader'];

          echo "Login Success1";

          echo "<a href='logout.php'> Logout</a> "; 
?>

<?php

include 'connection.php';

$query = "SELECT * FROM GameHost"; 
$result = mysqli_query($conn,$query);
	//ut data
	
echo "<table border='1'>
 <tr>
 <th>Username</th>
 <th>Password</th>
 </tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
	
<?php include 'footer.php'; ?>