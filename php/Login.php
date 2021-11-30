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

// 로그인 과정
$test = "SELECT UserId FROM User WHERE UserId='{$id}' and UserPw='{$pw}'";
$result = mysqli_query($conn,$test);
$exist = mysqli_num_rows($result);

if($exist==0){  // 존재하지 않을 때
    echo "
    <script>
        alert('존재하지 않는 정보입니다. 아이디와 비밀번호를 확인해주세요.');
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
        $_SESSION['username']=$row['UserName'];
        $_SESSION['userphone']=$row['UserPhone'];
        $_SESSION['usercheck']=$row['UserCheck'];

        echo "
        <script>
            alert('로그인에 성공했습니다.');
            location.href='Home.php';
        </script>
        ";
    }else{ // 로그인 실패
        echo "
        <script>
            alert('로그인에 실패했습니다.');
            history.go(-1);
        </script>
        ";
        exit;
    }
}

?>

