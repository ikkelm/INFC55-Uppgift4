<?php include 'header.php'; ?>
<?php session_start(); ?>
	<?php
      if(!isset($_SESSION['gamehost'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGamehost.php");
       

          
?>        
        <li><a href="addResult.php">Lägg till Resulat</a></li>
        <li><a href="editResultList.php">Uppdatera Resultat</a></li>
<?php include 'footer.php'; ?>