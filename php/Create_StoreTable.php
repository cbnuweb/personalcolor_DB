<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

// Create table
$sql =	"CREATE TABLE Store(
	StoreNo VARCHAR(45) NOT NULL, 
	StoreName VARCHAR(45) NOT NULL,
	StoreAddress VARCHAR(45) NOT NULL UNIQUE,
	StoreTime VARCHAR(45) NOT NULL,
    StoreInfo VARCHAR(100) NOT NULL,
    StoreCall VARCHAR(45) NOT NULL,
    StorePrice int(11)  NOT NULL,
	PRIMARY KEY(StoreNo)
	)";

if($conn->query($sql) === TRUE){
	echo "<script>";
	echo "alert('Table Store created successfully');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
}else{
	echo "<script>";
	echo "alert('Error creating database');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
	//echo $conn->error;
}

$conn->close();
?>