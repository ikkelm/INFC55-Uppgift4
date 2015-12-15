<?php include 'header.php'; ?>
<?php #session_name('fan'); ?>
<?php session_start(); ?>
	<?php
      if(!isset($_SESSION['gameleader'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGameleader.php");
       

      

          
?>

	<div id="main">
<h1>Lägg till lag</h1>
<div id="teamInfoForm">
<h2>Laginfo</h2>
<hr/>

<form action="upload.php" method="post" enctype="multipart/form-data">
<label>Välj bild att ladda upp:</label>
<input type="file" name="fileToUpload" id="fileToUpload">
<br></br>
<label>Division:</label>
<input type="text" name="division" id="division" required="required" placeholder="Lägg till division"/><br/><br />
<label>Laginfo:</label>
<input type="text" name="info" id="info" required="required" placeholder="Skriv info"/><br/><br />
<label>Lag:</label>
<input type="text" name="teamname" id="teamname" required="required" placeholder="Skriv in lagnamn"/><br/><br />	
<input type="submit" value=" Lägg till " name="submit"/><br />

</form>
</div>
<?php include 'footer.php'; ?>