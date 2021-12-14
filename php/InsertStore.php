<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

// Insert a record
$sql = "INSERT INTO Store(StoreNo,StoreName, StoreAddress, StoreTime, StoreInfo, StoreCall, StorePrice,StoreImg)
VALUES('1', 'COLOR AZIT', '충북 청주시 흥덕구 2순환로 1222', '1020', '#청주퍼스널컬러 #컬러이미지컨설팅 #퍼스널컬러 #퍼스널컬러진단 #컬러진단','043-232-4598',50000,'StoreImg1'),
('2', 'B&C COLOR LAB', '충북 청주시 서원구 남이면 가마길 40-11 2층', '1020', '#퍼스널컬러진단 #이미지컨설팅 #면접메이크업 #메이크업 #혼주메이크업','0507-1494-7586',50000,'StoreImg2'),
('3', 'JENARAUM', '충북 청주시 서원구 내수동로108번길 46', '0919', '#퍼스널컬러진단 #이미지컨설팅 #면접컨설팅','010-7318-2262',50000,'StoreImg3'),
('4', 'CHARMING, ON', '충북 청주시 서원구 사직대로157번길 19-2 1층', '1020', '#청주퍼스널컬러 #사창동퍼스널컬러 #청주뷰티샵','010-2447-2799',55000,'StoreImg4')";


if($conn->query($sql) === TRUE){
	echo "<script>";
	echo "alert('successfully');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
}else{
	echo "<script>";
	echo "alert('Error Insert database');";
	echo "location.href='../html/Create.html';";
	echo "</script>";
	//echo $conn->error;
}

$conn->close();
?>
