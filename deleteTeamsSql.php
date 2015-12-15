  <?php
    include 'header.php';
    include 'connection.php';

    $username="";
    $password="";
    $boolean = false;
   


    	if(isset($_POST['submit'])){//if the submit button is clicked


   
    	$teamname = $_POST['teamname'];
        
    	
        $id=$_GET['teamname'];
    	$delete = "DELETE FROM Team WHERE teamname='$teamname'"; 
    	$deletekor = mysqli_query($conn,$delete);
    	$boolean = true;
    	}

header("Location: http://grupp5.icsweb.se/UPHP/editteams.php");
die();  ?>

    ?>