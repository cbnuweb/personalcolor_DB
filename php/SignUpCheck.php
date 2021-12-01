<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$id = $_POST['signup_id'];
$pw = $_POST['signup_pw'];
$name = $_POST['signup_name'];
$phone = $_POST['signup_phone'];

if(!$id){
    echo "
    <script>
        alert('아이디를 입력해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}
if(!$pw){
    echo "
    <script>
        alert('비밀번호를 입력해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}
if(!$name){
    echo "
    <script>
        alert('이름을 입력해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}
if(!$phone){
    echo "
    <script>
        alert('휴대폰 번호를 입력해주세요.');
        history.go(-1);
    </script>
    ";
    exit;
}

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
        echo "
        <script>
            alert('Sign Up Error. Please try again.');
            history.go(-1);
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Sign Up Successfully. Go to the SignIn page.');
            location.href='SignIn.php';
        </script>
        ";
    }
}else{ // 중복일 때
    echo "
    <script>
        alert('Sign Up Error. Please try again.');
        history.go(-1);
    </script>
    ";
}

$conn->close();
?>


