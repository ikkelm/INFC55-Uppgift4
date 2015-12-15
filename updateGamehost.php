<?php include 'header.php'; ?>
<?php session_start(); ?>
	<?php
      if(!isset($_SESSION['gameleader'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGameleader.php");
       

          
?>
<title>Uppdatera Planvärd</title>


<h1>Uppdatera Planvard</h1>
<?php
// connect to the database
include('connection.php');

// get the records from the database
$query = "SELECT * FROM GameHost"; 
$result = mysqli_query($conn,$query);

{
// display records if there are records to display
if ($result->num_rows > 0)
{
// display records in a table
echo "<table border='1' cellpadding='10'>";

// set table headers
echo "<th>Användarnamn</th>
<th>Lösenord</th>
<th></th><th></th></tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
// set up a row for each record
echo "<tr>";
echo "<td>" . $row['username']. "</td>";
echo "<td>" . $row['password'] . "</td>";
echo"<td><a href='editGamehost.php?username=" . $row['username'] . "'>Ändra</a></td>";
echo "<td><a href='deleteGamehost.php?username=" . $row['username'] . "'>Ta bort</a></td>";
echo "</tr>";
}
echo "</table>";
}
// if there are no records in the database, display an alert message
else
{
echo "No results to display!";
}
}
mysqli_close($conn);
?>
<?php include 'footer.php'; ?>