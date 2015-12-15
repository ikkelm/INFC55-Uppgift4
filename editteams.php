<?php include 'header.php'; ?>
<?php session_start(); ?>
	<?php
      if(!isset($_SESSION['gameleader'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGameleader.php");
        
?>
<?php
include 'connection.php'; 

// Testar hämta värden från databasen och skriva ut i tabell

$sql = "SELECT teamname, division, picture, info FROM Team";
$result = mysqli_query($conn, $sql);

if($result === FALSE){
	die(mysqli_error());
}
else{
  echo "<table border='1'>
 <tr>
 <th>Lag</th>
 <th>Division</th>
 <th>Info</th>
 <th>Bild</th>
 <th></th>
 <th></th>
 </tr>";

if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) {	
echo "<tr>";
echo "<td> " . $row['teamname'] . "</td>";


echo "<td>"  . $row['division'] . "</td>";



echo "<td>" . $row['info'] . "</td>";
echo "<td>" . "<img src='uploads/".$row["picture"]."' height='100x' width='100x'>" . "</td>";
echo "<td>" . "<a href='adminteams.php?teamname=" . $row['teamname'] . "'>" . "Ändra</a>" . "</th>";
echo "<td>" . "<a href='deleteteams.php?teamname=" . $row['teamname'] . "'>" . "Ta bort</a>" . "</th>";
echo "</tr>" ;

    }
echo "</table>";
     
}else {
    echo "0 results";
}
}
?>
<?php include 'footer.php'; ?>