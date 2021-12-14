<?php
session_start();

include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$id = $_SESSION['userid'];
$phone = $_POST['phone'];

$sql = "UPDATE User SET UserPhone='{$phone}' WHERE UserId='{$id}'";
if(mysqli_query($conn,$sql)){ // 전화번호 바꾸기 성공
    echo "
    <script>
        alert('Succeeded in changing the phone. Please SignIn again.');
        location.href='Logout.php';
    </script>
    ";
}else{ // 전화번호 바꾸기 실패
    echo "
    <script>
        alert('Try again.');
        history.go(-1);
    </script>
    ";
    exit;
}
?>