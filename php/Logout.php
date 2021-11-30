<?php
    session_start();
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['userphone']);
    unset($_SESSION['usercheck']);

    echo "
    <script>
        alert('로그아웃이 완료되었습니다.');
        location.href='../html/Home.html';
    </script>
    ";
?>