    <?php
    include 'header.php';
    include 'connection.php';

    ?>
    <?php
    $teamname="";
    $division="";
    $picture="";
    $info="";
    $boolean = false;
 

    	if(isset($_POST['submit']))

        {//if the submit button is clicked


    	$teamname = $_POST['teamname'];
    	$division = $_POST['division'];
        $picture = $_POST['picture'];
        $info = $_POST['info'];
     
        $id=$_GET['teamname'];
    	$update = "UPDATE Team SET teamname='$teamname', division='$division', picture='$picture', info='$info' WHERE teamname = '$teamname'"; 
    	$updatekor = mysqli_query($conn,$update);
       $boolean = true;
    	}

          if($boolean == true){//if the update worked
        echo "<b>Update successful!</b>";
    }
    ?>
   