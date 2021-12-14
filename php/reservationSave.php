<?php

$servername = "localhost:3306";
$username = "root";
$password = "root";
if($_POST["storeName"] == 1){
  $storeName = "COLOR AZIT";
}
elseif($_POST["storeName"] == 2){
  $storeName = "B&C COLOR LAB";
}
elseif($_POST["storeName"] == 3){
  $storeName = "JENARAUM";
}
elseif($_POST["storeName"] == 4){
  $storeName = "CHARMING, ON";
}
//echo $storeName;
$resTime = $_POST["res_time"];
//echo $resTime;

$connect = new mysqli($servername, $username, $password);
if($connect -> connect_error){
  die("Connection failed: " + $conn->connect_error);
}

$dbname = "personalcolor";
mysqli_select_db($connect, $dbname) or die('DB selection failed');

$sql = "SELECT * FROM user WHERE UserCheck = 1";
$result = $connect->query($sql);


$resDate = $_POST["bday"]; // 날짜 가져오기
 while($storeinfo = mysqli_fetch_array($result)){
   $userID = $storeinfo["UserId"];
 }

//echo $resDate;
//echo $userID;

$result = mysqli_query($connect, "SELECT MAX(ResNo) AS ResNo FROM reservation");
$row = mysqli_fetch_array($result);
$resNo = !empty($row["ResNo"])?$row["ResNo"] + 1:1;
//echo $resNo;

/*$sql2 = "SELECT MAX(ResNo) AS ResNo FROM reservation";
 $row = $connect->query($sql2);
*/
//예약 시간 가져오기

$sql = "INSERT INTO reservation(ResNo, ResTime, ResUserId, ResStoreName, ResDate)
         VALUES('$resNo','$resTime','$userID','$storeName', '$resDate')";
  $result = mysqli_query($connect, $sql);

  print "<script language=javascript> alert('Reservation Successful'); location.replace('Mypage.php'); </script>";
 ?>
