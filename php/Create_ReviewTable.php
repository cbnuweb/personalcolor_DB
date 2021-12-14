<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

// Create table
$sql =   "CREATE TABLE Review(
    ReviewId int(11) NOT NULL AUTO_INCREMENT, 
    NickName VARCHAR(45),
    Store_No VARCHAR(45) NOT NULL,
    UserRating int(1) NOT NULL,
    UserReview text NOT NULL,
    datetime int(11) NOT NULL DEFAULT 0,
    PRIMARY KEY(ReviewId),
    FOREIGN KEY(NickName)
    REFERENCES User(UserName) ON UPDATE CASCADE,
    FOREIGN KEY(Store_No)
    REFERENCES Store(StoreNo) ON UPDATE CASCADE
   )";

if($conn->query($sql) === TRUE){
	echo "<script>";
	echo "alert('Table Review created successfully');";
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