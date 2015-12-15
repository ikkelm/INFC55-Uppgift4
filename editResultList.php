<?php include 'header.php'; ?>

 <h1>Resultat för prickskytte</h1>
<?php  

include 'connection.php';

$query = "SELECT * FROM ResultListShoot ORDER BY points DESC"; 
$result = mysqli_query($conn,$query);
	//ut data
	
echo "<table border='1'>
 <tr>
 <th>Namn</th>
 <th>Division</th>
 <th>Lag</th>
 <th>Poäng</th>
 <th></th>
 <th></th>
 </tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['division'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['points'] . "</td>";
echo "<td>" . "<a href='adminShoot.php?pname=" . $row['pname'] . "'>" . "Ändra</a>" . "</th>";
echo "<td>" . "<a href='deleteShoot.php?pname=" . $row['pname'] . "'>" . "Ta bort</a>" . "</th>";

echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
<h1>Resultat för teknikbana</h1>
<?php  

include 'connection.php';

$query = "SELECT * FROM ResultListTech ORDER BY time ASC"; 
$result = mysqli_query($conn,$query);
	//ut data
	
echo "<table border='1'>
 <tr>
 <th>Namn</th>
 <th>Division</th>
 <th>Lag</th>
 <th>Tid</th>
 <th></th>
 <th></th>
 </tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['division'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . "<a href='adminTech.php?pname=" . $row['pname'] . "'>" . "Ändra</a>" . "</th>";
echo "<td>" . "<a href='deleteTech.php?pname=" . $row['pname'] . "'>" . "Ta bort</a>" . "</th>";

echo "</tr>";
}
echo "</table>";
mysqli_close($conn);

?>
<?php include 'footer.php'; ?>
