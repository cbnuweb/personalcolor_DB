<?php
session_start();
    
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$id = $_SESSION['userid'];
$sql = "UPDATE User SET UserCheck=0 WHERE UserId='{$id}'";
if(mysqli_query($conn,$sql)){ // 로그인 성공
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['userphone']);
    unset($_SESSION['usercheck']);
    
    echo "
    <script>
        alert('Logout Sucessfully.');
        location.href='Home.php';
    </script>
    ";
}
?>

