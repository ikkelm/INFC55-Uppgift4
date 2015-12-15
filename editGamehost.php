  <?php include 'header.php'; ?>
    
 
<?php 
include 'connection.php';
$temp = $_GET['username'];

if(isset($_GET['username']))
    {
    $sql="SELECT username, password FROM GameHost WHERE username='". $temp ."'";
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
    $username=$row["username"];
    $password=$row["password"];
}
?> 
   <div id="main">
    <h1>Uppdatera Planvärd</h1>
    <div id="resultatskottform">
        <h2>Uppdatera planvärd</h2>
        <hr/>
        <form action="editGamehostSql.php" method="post">
            <label>Användarnamn:</label>
            <input type="text" name="username" id="username" required="required" readonly value="<?php echo $username; ?>"/><br/>
            <label>Lösenord:</label>
            <input type="text" name="password" id="password" required="required" value="<?php echo $password; ?>"/><br/>
            <input type="submit" value=" Uppdatera " name="submit"/><br />
        </form>
    </div>


<?php include 'footer.php'; ?>