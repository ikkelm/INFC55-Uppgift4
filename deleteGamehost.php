

<?php 
include 'header.php';
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
    <h1>Ta bort Planvärd</h1>
    <div id="resultatskottform">
        <h2>Ta bort planvärd</h2>
        <hr/>
        <form action="deleteGamehostSql.php" method="post">
            <label> Username:</label>
            <input type="text" name="username" id="username" required="required" readonly value="<?php echo $username; ?>"/><br/>
            <label> Password:</label>
            <input type="text" name="password" id="password" required="required" readonly value="<?php echo $password; ?>"/><br/>
            <input type="submit" value=" Delete " name="Delete"/><br />
        </form>
    </div>

<?php include 'footer.php'; ?>