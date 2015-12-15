<?php

//sql to drop tables

$sqld = "DROP TABLE IF EXISTS GameLeader";

$sqld1 ="DROP TABLE IF EXISTS GameHost";

$sqld2 = "DROP TABLE IF EXISTS Team";

$sqld3 = "DROP TABLE IF EXISTS ResultListTech";

$sqld4 = "DROP TABLE IF EXISTS ResultListShoot";  


if (mysqli_query($conn, $sqld)) {
    echo "Table deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sqld1)) {
    echo "Table 1 deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sqld3)) {
    echo "Table 3 deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sqld4)) {
    echo "Table  4 deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sqld2)) {
    echo "Table 2 deleted successfully";
} else {
    echo "Error deleting table: " . mysqli_error($conn);
}
echo "<br>";



// sql to create table


$sql = "CREATE TABLE GameLeader (
username VARCHAR(30) NOT NULL,
password VARCHAR(30),
PRIMARY KEY (username))
engine=innodb"; 

$sql1 ="CREATE TABLE GameHost (
username VARCHAR(30) NOT NULL,
password VARCHAR(30),
PRIMARY KEY(username))
engine=innodb";

$sql2 = "CREATE TABLE Team ( 
teamname VARCHAR(30) NOT NULL,
division INT(3) NOT NULL,
picture VARCHAR(30), 
info VARCHAR(300),
PRIMARY KEY (teamname, division))
engine=innodb";

$sql3 = "CREATE TABLE ResultListTech (
pname VARCHAR(30) NOT NULL,
teamname VARCHAR(30),
time INT(6),
division INT(3),
PRIMARY KEY (pname),
FOREIGN KEY (teamname, division) REFERENCES Team(teamname, division) ON DELETE CASCADE)
engine=innodb";

$sql4 = "CREATE TABLE ResultListShoot (
pname VARCHAR(30) NOT NULL,
teamname VARCHAR(30),
points INT(10),
division INT(3),
PRIMARY KEY (pname),
FOREIGN KEY (teamname, division) REFERENCES Team(teamname, division) ON DELETE CASCADE)
engine=innodb";  


if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sql1)) {
    echo "Table 1 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sql2)) {
    echo "Table 2 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sql3)) {
    echo "Table 3 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

echo "<br>";

if (mysqli_query($conn, $sql4)) {
    echo "Table  4 created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

echo "<br>";

mysqli_close($conn);

?>