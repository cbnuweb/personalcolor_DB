<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

// Create table
$sql =	"CREATE TABLE Reservation(
	ResNo int(11) NOT NULL AUTO_INCREMENT,
    ResTime VARCHAR(45) NOT NULL,
    ResUserId VARCHAR(45) NOT NULL,
    ResStoreName VARCHAR(45) NOT NULL,
	ResDate VARCHAR(45) NOT NULL,
	PRIMARY KEY(ResNo),
    FOREIGN KEY(ResUserId)
    REFERENCES User(UserId) ON UPDATE CASCADE,
    FOREIGN KEY(ResStoreName)
    REFERENCES Store(StoreName) ON UPDATE CASCADE
	)";

if($conn->query($sql) === TRUE){
	echo "<script>";
	echo "alert('Table Reservation created successfully');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
}else{
	echo "<script>";
	echo "alert('Error creating database');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
	// echo $conn->error;
}

$conn->close();
?>