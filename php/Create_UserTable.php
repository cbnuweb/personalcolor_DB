<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

// Create table
$sql =	"CREATE TABLE User(
	UserId VARCHAR(45) NOT NULL, 
	UserPw VARCHAR(45) NOT NULL,
	UserName VARCHAR(45) NOT NULL UNIQUE,
	UserPhone VARCHAR(45) NOT NULL,
	UserCheck boolean DEFAULT 0,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	PRIMARY KEY(UserId)
	)";

if($conn->query($sql) === TRUE){
	echo "<script>";
	echo "alert('Table User created successfully');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
}else{
	echo "<script>";
	echo "alert('Error creating table');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
	//echo $conn->error;
}

$conn->close();
?>