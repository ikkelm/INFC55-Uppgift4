<?php session_start();// session starts with the help of this function  ?> 
<?php include 'header.php';  ?>

<?php
include 'connection.php';

if(isset($_SESSION['gameleader']))   // Checking whether the session is already there or not if 
                              // true that header redirect it to the home page directly 
 {
    header("Location:showResult.php"); 
 }

if(isset($_POST['login']))   // it checks when the user clicks the button 
{
     $username = $_POST['username'];
     $password = $_POST['password'];

      
$sqlquery = "SELECT * FROM GameLeader WHERE username='$username' and password='$password'"; 
$result = mysqli_query($conn,$sqlquery)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);

if( $num_row ==1 ){
      

          $_SESSION['gameleader']=$username;


         echo '<script type="text/javascript"> window.open("adminGameleader.php","_self");</script>'; //  On Successfull Login redirects to home.php

        }

        else
        {
            echo "<script type= 'text/javascript'>alert('Fel användarnamn eller lösenord eller så är inte användaren registrerad. Kontakta dagens Spelledare.');</script>";
                    
        }
}
 ?>
<html>
<head>

<title>Login Page</title>

</head>

<body>
<div id="login">
<h2>Logga in som Spelledare</h2>
<hr/>
<form action="" method="post">
<label>Användarnamn:</label>
<input type="text" name="username" id="username" required="required" placeholder="Ditt användarnamn"/><br /><br />
<label> Lösenord:</label>
<input type="password" name="password" id="password" required="required" placeholder="Ditt lösenord"/><br/><br />
<input type="submit" value=" Logga in " name="login"/><br />
</form>
</div>

<?php include 'footer.php'; ?>