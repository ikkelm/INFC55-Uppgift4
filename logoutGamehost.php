<?php

 session_start();


  echo "Logout Successfully ";
  //unset($_SESSION['gamehost']);
  session_destroy();   // function that Destroys Session 
  header("Location: showResult.php");
?>