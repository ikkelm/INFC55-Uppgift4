<?php include 'header.php'; ?>

 <h1>Resultat för prickskytte</h1>
<?php  

include 'connection.php';

//För div 1
$query1 = "SELECT * FROM ResultListShoot WHERE division=' 1 ' ORDER BY points DESC LIMIT 3"; 
$result1 = mysqli_query($conn,$query1);

echo "<table>
 <tr>
 <th>Division 1</th>
 <th>Namn</th>
 <th>Lag</th>
 <th>Poäng</th>
 </tr>";

$num = '1';
while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" . " $num:a plats" . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['points'] . "</td>";

echo "</tr>";
$num++;
}
echo "</table>";

// För div 2
$query2 = "SELECT * FROM ResultListShoot WHERE division=' 2 ' ORDER BY points DESC LIMIT 3"; 
$result2 = mysqli_query($conn,$query2);


echo "<table>
 <tr>
 <th>Division 2</th>
 <th></th>
 <th></th>
 <th></th>
 </tr>";
$num = '1';
while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" . " $num:a plats" . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['points'] . "</td>";

echo "</tr>";
$num++;
}
echo "</table>";

//För div 3
$query3 = "SELECT * FROM ResultListShoot WHERE division=' 3 ' ORDER BY points DESC LIMIT 3"; 
$result3 = mysqli_query($conn,$query3);
	
	
echo "<table>
 <tr>
 <th>Division 3</th>
 <th></th>
 <th></th>
 <th></th>
 </tr>";
$num = '1';
while($row = mysqli_fetch_array($result3,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" . "$num:a plats" . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['points'] . "</td>";

echo "</tr>";
$num++;
}
echo "</table>";
?>



<h1>Resultat för teknikbana</h1>
<?php  
// Teknikbanan

//För div 1
$query4 = "SELECT * FROM ResultListTech WHERE division=' 1 ' ORDER BY time ASC LIMIT 3"; 
$result4 = mysqli_query($conn,$query4);

echo "<table>
 <tr>
 <th>Division 1</th>
 <th>Namn</th>
 <th>Lag</th>
 <th>Tid</th>
 </tr>";
$num = '1';
while($row = mysqli_fetch_array($result4,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" .  "$num:a plats" . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['time'] . "</td>";

echo "</tr>";
$num++;
}
echo "</table>";

// För div 2
$query5 = "SELECT * FROM ResultListTech WHERE division=' 2 ' ORDER BY time ASC LIMIT 3"; 
$result5 = mysqli_query($conn,$query5);


echo "<table>
 <tr>
 <th>Division 2</th>
 <th></th>
 <th></th>
 <th></th>
 </tr>";
$num = '1';
while($row = mysqli_fetch_array($result5,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" .  "$num:a plats" . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['time'] . "</td>";

echo "</tr>";
$num++;
}
echo "</table>";

//För div 3
$query6 = "SELECT * FROM ResultListTech WHERE division=' 3 ' ORDER BY time ASC LIMIT 3"; 
$result6 = mysqli_query($conn,$query6);
	
	
echo "<table>
 <tr>
 <th>Division 3</th>
 <th></th>
 <th></th>
 <th></th>
 </tr>";
$num = '1';
while($row = mysqli_fetch_array($result6,MYSQLI_ASSOC))
{	
echo "<tr>";
echo "<td>" .  "$num:a plats" . "</td>";
echo "<td>" . $row['pname'] . "</td>";
echo "<td>" . $row['teamname'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "</tr>";
$num++;
}


echo "</table>";
mysqli_close($conn);


?>
<?php include 'footer.php'; ?>
