<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

$connect = new mysqli($servername, $username, $password);
if($connect -> connect_error){
  die("Connection failed: " + $conn->connect_error);
}

$dbname = "personalcolor";
mysqli_select_db($connect, $dbname) or die('DB selection failed');
$resNo = $_POST['resno'];

     $sql = "DELETE FROM reservation WHERE ResNo = '".$resNo."'";
     $result = $connect->query($sql);
     print "<script language=javascript> alert('취소 되었습니다.'); location.replace('Mypage.php'); </script>";


?>
