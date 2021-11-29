<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$id = $_POST['signup_id'];
$pw = $_POST['signup_pw'];
$name = $_POST['signup_name'];
$phone = $_POST['signup_phone'];

//중복 검사
$test = "SELECT UserId FROM User WHERE UserId='{$id}'";
$result = mysqli_query($conn,$test);
$exist = mysqli_num_rows($result);

if($exist==0){ // 중복이 아닐 때
    $sql = "INSERT INTO User(UserId, UserPw, UserName, UserPhone)
            VALUES('$id','$pw','$name','$phone')";
    echo $sql;
    $result = mysqli_query($conn, $sql);

    if($result === false){
        echo "<script>";
        echo "alert('Sign Up Error. Please try again.');";
        echo "location.href='../html/SignUp.html';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('Sign Up Successfully. Go to the SignIn page.');";
        echo "location.href='../html/SignIn.html';";
        echo "</script>";
    }
}else{ // 중복일 때
    echo "<script>";
    echo "alert('It\'s a duplicate ID. Please try again.');";
    echo "location.href='../html/SignUp.html';";
    echo "</script>";
}

$conn->close();
?>


