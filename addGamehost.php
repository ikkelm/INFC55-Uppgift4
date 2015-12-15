<?php include 'header.php'; ?>
<?php session_start(); ?>
	<?php 
      if(!isset($_SESSION['gameleader'])) // If session is not set that redirect to Login Page                            {
           header("Location:loginGameleader.php");
       

          
?>

<div id="main">
<div id="login">
<h2>Lägg till Planvärd</h2>
<hr/>
<form action="" method="post">
<label>Användarnamn:</label>
<input type="text" name="username" id="username" required="required" placeholder="Skriv användarnamn"/><br /><br />
<label>Lösenord:</label>
<input type="password" name="password" id="password" required="required" placeholder="Skriv in lösenord"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>



	<?php 
	if(isset($_POST["submit"])){
	include 'connection.php';




$query = "INSERT INTO GameHost (username, password) VALUES ('".$_POST["username"]."','".$_POST["password"]."')";
$result = mysqli_query($conn,$query);

if (mysqli_query($result, $conn)) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascriptError: " . $sql . "<br>" . $conn->error."');</script>";
}
}

include 'footer.php'; ?>