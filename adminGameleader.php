<?php include 'header.php'; ?>
<?php session_start(); ?>
	<?php
      if(!isset($_SESSION['gameleader'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGameleader.php");
       

        

          
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>



        
        <li><a href="addGamehost.php">Lägg till Planvärd</a></li>
        <li><a href="updateGamehost.php">Uppdatera Planvärd</a></li>
        <li><a href="addteam.php">Lägg till lag</a></li>
        <li><a href="editteams.php">Uppdatera lag</a></li>
	 
       
<body>
	
</body>
</html>
<?php include 'footer.php'; ?>