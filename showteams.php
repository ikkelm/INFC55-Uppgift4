
<?php include 'header.php'; ?>

<?php
include 'connection.php'; 

//  hämta värden från databasen och skriva ut i tbell

$sql = "SELECT teamname, division, picture, info FROM Team";
$result = mysqli_query($conn, $sql);

if($result === FALSE){
	die(mysqli_error());
}
else{
	
 echo "<table>
 <tr>
 <th>Lag</th>
 <th>division</th>
 <th>info</th>
 <th>Bild</th>
 </tr>";
}
if(mysqli_num_rows($result) > 0) {
    // output data of each row
         while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {	
echo "<tr>";
echo "<td>" . $row["teamname"] . "</td>";
echo "<td>" . $row['division'] . "</td>";
echo "<td>" . $row['info'] . "</td>";
echo "<td>" . "<img src='uploads/".$row["picture"]."' height='50px' width='50px'>" . "</td>";
echo "</tr>";

    }
}
echo "</table>";
?>
<?php include 'footer.php';
 ?>