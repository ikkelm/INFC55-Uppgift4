    <?php
    include 'header.php';
    include 'connection.php';

    ?>
    <?php
    $boolean = false;
 

    	if(isset($_POST['submit']))

        {//if the submit button is clicked


    	$pname = $_POST['pname'];
    	$division = $_POST['division'];
        $teamname = $_POST['teamname'];
        $time = $_POST['time'];
     
        $id=$_GET['pname'];
    	$update = "UPDATE ResultListTech SET pname='$pname', division='$division', teamname='$teamname', time='$time' WHERE pname = '$pname'"; 
    	$updatekor = mysqli_query($conn,$update);
       $boolean = true;
    	}

          if($boolean == true){//if the update worked
        echo "<b>Update successful!</b>";
    }
    ?>
   