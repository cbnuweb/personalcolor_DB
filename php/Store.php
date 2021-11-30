<?php header("Progma:no-cache"); header("Cache-Control: no-store, no-cache ,must-revalidate"); ?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>P-Color Reservation Select Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script   src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <link  rel="stylesheet" href="../css/Main.css" >
  <link rel="stylesheet" href="../css/Store.css">
  <script type="text/javascript" src="../javascript/Store.js"></script>

  </script>

  <script>


$(document).ready(function(){
  var storeno1 = 1;
  var storeno2 = 2;
  var storeno3 = 3;
  var storeno4 = 4;

  $('#store1').on('click', function(){
    location.href='Reservation.php?storeno='+storeno1;
  });
  $('#store2').on('click', function(){
    location.href='Reservation.php?storeno='+storeno2;
  });
  $('#store3').on('click', function(){
    location.href='Reservation.php?storeno='+storeno3;
  });
  $('#store4').on('click', function(){
    location.href='Reservation.php?storeno='+storeno4;
  });
});
  </script>


</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="padding-top:80px;">
    <!-- nav div -->
    <nav class="navbar navbar-expnad-xl navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <a class="navbar-grand navbar-left" href="Home.html">
              <img class="navimg" src="../img/logo.png" alt="Logo" width="100"></img>
          </a>
          <button type="button" class="navbar-toggle active" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="myNavbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-left" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="Test.html">test</a></li>
                  <li class="nav-item"><a class="nav-link" href="Spring.html">characteristice</a></li>
                  <li class="nav-item"><a class="nav-link" href="Match.html">mathcing</a></li>
                  <li class="nav-item"><a class="nav-link" href="Store.html">reservation</a></li>
                </ul>
                <!-- 추후 로그인 완료 시 MyPage, Logout 으로 바꿀예정 -->
                <ul class="nav navbar-nav navbar-right" style="text-align:center; font-weight:bold; margin-left:10px;">
                  <li class="nav-item"><a class="nav-link" href="SignIn.html">Sign in</a></li>
                  <li class="nav-item"><a class="nav-link" href="SignUp.html">Sign up</a></li>
                </ul>
          </div>
      </div>
    </nav>

  <!-- content div -->
  <div class="container-fluid">
    <div class="content">
      <!-- Selectsection -->
      <section class="page_section" id="selectsection">

        <!-- Selectsection title - -->
        <div class="section_title">
          <h2 class="section-heading text-uppercase">Reservation</h2>
          <h3 class="section-subheading text-muted">Choose Offline Store to Personal Color Test</h3>
        </div>

        <!-- Selectsection content -->
          <div class="row">
            <div class="col-md-4" id="store1" mouseover="over(this);" onmouseout="out(this);" value="1">
                <div>
                <img src="../img/store1.jpg" alt="cam" class="selectsection_image img-resonsive">
              </div>
              <div class="selectsection_p">
                <p id="store1_p">Color Azit</p>
              </div>
            </div>
          <div class="col-md-4" id="store2" onmouseover="over(this);" onmouseout="out(this);">
            <div>
              <img src="../img/store2.jpg" alt="picture" class="selectsection_image img-resonsive">
            </div>
            <div class="selectsection_p">
              <p id="store2_p">B&C Color Lab</p>
            </div>
          </div>
          <div class="col-md-4" id="store3" onmouseover="over(this);" onmouseout="out(this);">
            <div>
              <img src="../img/store3.jpg" alt="survey" class="selectsection_image img-resonsive">
            </div>
            <div class="selectsection_p">
              <p id="store3_p">jenaraum</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" id="store4" onmouseover="over(this);" onmouseout="out(this);">
            <div>
              <img src="../img/store4.jpg" alt="cam" class="selectsection_image img-resonsive">
            </div>
            <div class="selectsection_p">
              <p id="store4_p">charming on</p>
            </div>
          </div>
          <div class="col-md-4" id="" onclick="location.href='Reservation.html'" onmouseover="over(this);" onmouseout="out(this);">
            <div>
              <img src="" alt="" class="selectsection_image img-resonsive">
            </div>
            <div class="selectsection_p">
              <p id=""></p>
            </div>
          </div>
           <div class="col-md-4" id="" onclick="location.href='Reservation.html'" onmouseover="over(this);" onmouseout="out(this);">  <div>
              <img src="" alt="" class="selectsection_image img-resonsive">
            </div>
            <div class="selectsection_p">
              <p id=""></p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>

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
