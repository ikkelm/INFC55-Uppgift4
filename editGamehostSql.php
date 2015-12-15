    <?php
    include 'header.php';
    include 'connection.php';

    ?>
    <?php
    $username="";
    $password="";
    $boolean = false;
 

    	if(isset($_POST['submit']))

        {//if the submit button is clicked


    	$username = $_POST['username'];
    	$password = $_POST['password'];
     
        $id=$_GET['username'];
    	$update = "UPDATE GameHost SET username='$username', password='$password' WHERE username = '$username'"; 
    	$updatekor = mysqli_query($conn,$update);
       	$boolean = true;
    	}

          if($boolean == true){//if the update worked
        echo "<b>Update successful!</b>";
    }
    ?>
   