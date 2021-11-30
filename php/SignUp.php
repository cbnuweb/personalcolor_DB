<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
  <title>P-Color MainPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <link  rel="stylesheet" href="../css/Main.css" >
  <link  rel="stylesheet" href="../css/Sign.css" >
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="padding-top:80px;">
  <!-- nav div -->
  <nav class="navbar navbar-expnad-xl navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <a class="navbar-grand navbar-left" href="Home.php">
              <img class="navimg" src="../img/logo.png" alt="Logo" width="100"></img>
          </a>
          <button type="button" class="navbar-toggle active" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="myNavbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-left" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="Test.php">test</a></li>
                  <li class="nav-item"><a class="nav-link" href="Spring.php">characteristice</a></li>
                  <li class="nav-item"><a class="nav-link" href="Match.php">mathcing</a></li>
                  <li class="nav-item"><a class="nav-link" href="Store.php">reservation</a></li>
                </ul>

                <?php
                if(isset($_SESSION['userid'])){
                ?>
                <ul class="nav navbar-nav navbar-right" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="Mypage.php">Mypage</a></li>
                  <li class="nav-item"><a class="nav-link" href="Logout.php">Logout</a></li>
                </ul>
                <?php
                }else{
                ?>
                <ul class="nav navbar-nav navbar-right" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="SignIn.php">Sign in</a></li>
                  <li class="nav-item"><a class="nav-link" href="SignUp.php">Sign up</a></li>
                </ul>
                <?php
                }
                ?>
          </div>
      </div>
    </nav>

  <!-- content div -->
  <div class="container-fluid">
    <div class="content">
      <!-- signupsection -->
      <section class="page_section signinsection">
        <!-- signupsection content -->
          <div class="sign">
            <div class="section_title">
              <h2>sign up</h2>
              <h3>Please enter your sign up information</h3>
            </div>
            <div class="sign_up">
                <form class="form-inline" action="SignUpCheck.php" method="POST" id="SignUp_Form">
                    <div class="form-group">
                      <label for="id" class="col-sm-2">ID</label>
                      <div class="col-sm-10">
                        <input type="text" class="form control" name="signup_id" id="signup_id" placeholder="ID">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-2">PW</label>
                      <div class="col-sm-10">
                          <input type="password" class="form control" name="signup_pw" id="signup_pw" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-sm-2">PW_Check</label>
                      <div class="col-sm-10">
                          <input type="password" class="form control" name="signup_pw_check" id="signup_pw_check" placeholder="Password Check">
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form control" name="signup_name" id="signup_name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form control" name="signup_phone" id="signup_phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="submit">
                        <button type="button" id="signup_submit" class="btn">submit</button>
                    </div>
                </form>
            </div>
          </div>
      </section>
    </div>
  </div>
  
  <!-- 버튼 클릭 시 발생 이벤트 -->
  <script>
    const signup_form = document.querySelector("#SignUp_Form");
    const signup_submit = document.querySelector("#signup_submit");
    const signup_pw = document.querySelector("#signup_pw");
    const signup_pw_check = document.querySelector("#signup_pw_check");
    
    signup_submit.addEventListener("click",function(e) {
      if(signup_pw.value&&signup_pw.value === signup_pw_check.value){
          signup_form.submit();
      }else{
        alert("비밀번호가 서로 일치하지 않습니다.");
        return false;
      }
    });
  </script>


   <!--footer-->
   <footer class="container-fluid text-center" id="footer">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <br>
    <div class="row">
      <div class="col-md-9" style="text-align:left;">
        <h4>About us</h4>
        <label><b>Team leader :</b> Cheon Eun-jung</label><br>
        <label><b>Team Member :</b> Jeon Seung-won, Lee Bo-Hyeon</label><br>
        <label><b>Address :</b> S4-1-dong No. 116 in Gaeksin-ro, Heungdeok-gu, Chungbuk-do</label>

      </div>
      <div class="col-md-3" style="text-align:left;">
        <h4>Contact us</h4>
        <label><b>Tel :</b> 010-1234-5678</label><br>
        <label><b>Email :</b> a12345@naver.com</label>
      </div>
    </footer>
  </body>
  </html>
