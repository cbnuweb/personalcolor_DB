<?php
session_start();

include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$id = $_SESSION['userid'];
$pw = $_POST['password'];

$sql = "UPDATE User SET UserPw='{$pw}' WHERE UserId='{$id}'";
if(mysqli_query($conn,$sql)){ // 비밀번호 바꾸기 성공
    echo "
    <script>
        alert('Succeeded in changing the password. Please SignIn again.');
        location.href='Logout.php';
    </script>
    ";
}else{ // 비밀번호 바꾸기 실패
    echo "
    <script>
        alert('Try again.');
        history.go(-1);
    </script>
    ";
    exit;
}
?>