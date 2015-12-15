<?php
include 'connection.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 header("Location:editteams.php");
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Filen är en bild - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Filen är inte en bild.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Ledsen, din fil finns redan.";
    $uploadOk = 0;
}

 // Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Ledsen, din fil är för stor.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Ledsen, enbart JPG, JPEG, PNG & GIF filer är tillåtna.";
    $uploadOk = 0;
}


// Check if $uploadOK is set to 0 by a error that might have accoured
if ($uploadOK === 0) {
	echo "Din fil blev inte uppladdad.";
// If everything is ok, try to upload the file
}
else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "Filen " . basename( $FILES["fileToUpload"]["name"]). " har laddats upp.";
	}else {
		echo "Det var ett problem med att ladda upp din fil.";
	}
}

if(isset($_POST["submit"])) {
$image=basename($_FILES["fileToUpload"]["name"]); // used to store the filename in a variable

$sql = "INSERT INTO Team (teamname, division, picture, info)
VALUES ('".$_POST["teamname"]."','".$_POST["division"]."','".$image."','".$_POST["info"]."')";

if (mysqli_query($conn, $sql)) {
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
}

if(isset($_POST["change"])) {


    $teamname = $_POST['teamname'];
    $division = $_POST['division'];
    $picture = $_POST['picture'];
    $info = $_POST['info'];
     
  // if(!isEmpty($picture) ) {
    $update = "UPDATE Team SET teamname='$teamname', division='$division', picture='$picture', info='$info' WHERE teamname = '$teamname'"; 
    if (mysqli_query($conn, $update)) {
         $updatekor = mysqli_query($conn,$update); 
    }
    else {
        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
/*}

else {
 $update = "UPDATE Team SET teamname='$teamname', division='$division', info='$info' WHERE teamname = '$teamname'"; 
    if (mysqli_query($conn, $update)) {
         $updatekor = mysqli_query($conn,$update); 
}
else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

}
*/
}
?>