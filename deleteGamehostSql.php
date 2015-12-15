  <?php include 'header.php' ?>
  <?php
    include 'header.php';
    include 'connection.php';

    ?>
    <?php
    $username="";
    $password="";
    $boolean = false;
    //$id="";

    	if(isset($_POST['Delete'])){//if the submit button is clicked


    	$username = $_POST['username'];
    	$password = $_POST['password'];
        //$id = $_POST['username'];
    	
        $id=$_GET['username'];
    	$delete = "DELETE FROM GameHost WHERE username='$username'"; // password='$password' 
    	$deletekor = mysqli_query($conn,$delete);
    	$boolean = true;
    	}
    ?>