<?php
include_once 'dbconfig.php';

// Create database
$sql = "CREATE DATABASE personalcolor";

if($conn->query($sql) === TRUE){
	echo "<script>";
	echo "alert('Database personalcolor created successfully');";
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

