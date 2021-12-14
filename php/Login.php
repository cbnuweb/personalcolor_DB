<?php
include_once 'dbconfig.php';

// Select a database
$dbname = "personalcolor";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

$id = $_POST['signin_id'];
$pw = $_POST['signin_pw'];

// 아이디 비밀번호 입력 여부 확인
if(!$id){
    echo "
    <script>
        alert('Please enter your ID.');
        history.go(-1);
    </script>
    ";
    exit;
}
if(!$pw){
    echo "
    <script>
        alert('Please enter your PassWord.');
        history.go(-1);
    </script>
    ";
    exit;
}

// 로그인 과정
$test = "SELECT * FROM User WHERE UserId='{$id}' and UserPw='{$pw}'";
$result = mysqli_query($conn,$test);
$exist = mysqli_num_rows($result);

if($exist==0){  // 존재하지 않을 때
    echo "
    <script>
        alert('This information does not exist. Please check your ID and password.');
        history.go(-1);
    </script>
    ";
    eixt;
}else{ 
    $sql = "UPDATE User SET UserCheck=1 WHERE UserId='{$id}'";
    if(mysqli_query($conn,$sql)){ // 로그인 성공
        // 해당하는 User 정보 얻어오기
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        // 세션에 저장
        session_start();
        $_SESSION['userid']=$row['UserId'];
        $_SESSION['userpw']=$row['UserPw'];
        $_SESSION['username']=$row['UserName'];
        $_SESSION['userphone']=$row['UserPhone'];
        $_SESSION['usercheck']=$row['UserCheck'];

        echo "
        <script>
            alert('SignIn successful.');
            location.href='Home.php';
        </script>
        ";
    }else{ // 로그인 실패
        echo "
        <script>
            alert('Try again.');
            history.go(-1);
        </script>
        ";
        exit;
    }
}

?>

