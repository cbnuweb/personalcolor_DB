<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$id = $_POST['signin_id'];
$pw = $_POST['signin_pw'];

// 아이디가 존재하는지 확인
$test = "SELECT UserId FROM User WHERE UserId='{$id}'";
$result = mysqli_query($conn,$test);
$exist = mysqli_num_rows($result);

if($exist==0){  // 존재하지 않을 때
    echo "<script>";
    echo "alert('This ID doesn't exist.. Please try again.');";
    echo "location.href='../html/SignIn.html';";
    echo "</script>";
}else{ 
    $sql = "UPDATE User SET UserCheck=1 WHERE UserId='{$id}'";
    if(mysqli_query($conn,$sql)){ // 로그인 성공
        echo "<script>";
        echo "alert('Sign In Successfully.');";
        echo "location.href='../html/Home.html';";
        echo "</script>";
    }else{ // 로그인 실패
        echo "<script>";
        echo "alert('This ID doesn't exist.. Please try again.');";
        echo "location.href='../html/SignIn.html';";
        echo "</script>";
    }
}
?>