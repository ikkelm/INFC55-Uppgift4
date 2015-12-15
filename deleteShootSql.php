  <?php include 'header.php' ?>
  <?php
    include 'header.php';
    include 'connection.php';

    ?>
    <?php
    $pname = "";
    $boolean = false;
   


    	if(isset($_POST['submit'])){//if the submit button is clicked


    	$pname = $_POST['pname'];
        
    	
        $id=$_GET['pname'];
    	$delete = "DELETE FROM ResultListShoot WHERE pname='$pname'"; 
    	$deletekor = mysqli_query($conn,$delete);
    	$boolean = true;
    	}
    ?>