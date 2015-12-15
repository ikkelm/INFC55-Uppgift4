<?php include 'header.php'; ?>
<?php session_start(); ?>
	<?php
      if(!isset($_SESSION['gamehost'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGamehost.php");        
?>

	<div id="main">
		<h1>Lägg till deltagare och resultat för prickskytte</h1>
		<div id="resultatskottform">
			<h2>Prickskytte</h2>
			<hr/>
			<form action="resultListShootSql.php" method="post">
				<label> Namn:</label>
				<input type="text" name="pname" id="pname" required="required" placeholder="Skriv in namn"/><br/><br />
				<label> Division:</label>
				<input type="text" name="division" id="division" required="required" placeholder="Lägg till division"/><br/><br />
				<label>Lag:</label>
				<input type="text" name="teamname" id="teamname" required="required" placeholder="Skriv in lagnamn"/><br/><br />
				<label> Poäng:</label>
				<input type="text" name="points" id="points" required="required" placeholder="Antal poäng"/><br/><br />	
				<input type="submit" value=" Lägg till " name="submit"/><br />
			</form>
		</div>
		<h1>Lägg till deltagare och resultat för teknikbana</h1>
		<div id="resultatteknikform">
			<h2>Teknikbana</h2>
			<hr/>
			<form action="resultListTechSql.php" method="post">
				<label> Namn:</label>
				<input type="text" name="pname" id="pname" required="required" placeholder="Skriv in namn"/><br/><br />
				<label> Division:</label>
				<input type="text" name="division" id="division" required="required" placeholder="Lägg till division"/><br/><br />
				<label>Lag:</label>
				<input type="text" name="teamname" id="teamname" required="required" placeholder="Skriv in lagnamn"/><br/><br />
				<label>Tid:</label>
				<input type="text" name="time" id="time" required="required" placeholder="Tid"/><br/><br />	
				<input type="submit" value=" Lägg till " name="submit"/><br />
			</form>
		</div>
	
	
<?php include 'footer.php'; ?>