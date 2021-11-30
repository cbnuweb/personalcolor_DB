<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
  <title>P-Color MatchingPage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <link  rel="stylesheet" href="../css/Match.css" >
  <link  rel="stylesheet" href="../css/Main.css" >
  <script type="text/javascript" src="../javascript/Match.js"></script>

  <script>
  navigator.mediaDevices.getUserMedia({
    video:{
      width: 180,
    }
  }).then(stream=>{
    document.getElementById("vid").srcObject = stream;
  })
  </script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="padding-top:80px";>
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

  <!-- content div-->
  <div class="container-fluid">
    <div class="content">
      <!-- section1 -->
      <section class="page_section" id="section1">
        <div class="section_title">
          <h2>Personal Color Matching</h2>
          <h3 class="text-muted">Match color by personal color type</h3>
        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="section1_camera">
              <div class="circle">
                <video id="vid" style="width: 200px; height: 200px; object-fit: cover;" autoplay></video>
              </div>
            </div>
            <div id="section1_cloth" style="background-color:black;">
              <img src="../img/cloth.png" alt="cloth" class="img-responsive" >
            </div>
          </div>

          <div class="col-md-4">
            <p id="palette_p">Color Palette</p>
            <div class="section1_btn">
              <button type="button" name="button" id="spr" onclick="select(this);">SPRING</button>
              <button type="button" name="button" id="sum" onclick="select(this);">SUMMER</button>
              <button type="button" name="button" id="aut" onclick="select(this);">FALL</button>
              <button type="button" name="button" id="win" onclick="select(this);">WINTER</button>
            </div>
            <div class="section6_palette">
              <table class="palette_table">
                <tr>
                  <td data-name="001" id="1" bgcolor="#D82D19" onclick="changecloth(this)">&nbsp</td>
                  <td data-name="002" id="2" bgcolor="#E88452" onclick="changecloth(this)">&nbsp</td>
                </tr>
                <tr>
                  <td data-name="003" id="3" bgcolor="#FBB1B1" onclick="changecloth(this)">&nbsp</td>
                  <td data-name="004" id="4" bgcolor="#EEF3B1" onclick="changecloth(this)">&nbsp</td>
                </tr>
                <tr>
                  <td data-name="005" id="5" bgcolor="#94DA9B" onclick="changecloth(this)">&nbsp</td>
                  <td data-name="006" id="6" bgcolor="#BAEBD7" onclick="changecloth(this)">&nbsp</td>
                </tr>
                <tr>
                  <td data-name="007" id="7" bgcolor="#64BDCD" onclick="changecloth(this)">&nbsp</td>
                  <td data-name="008" id="8" bgcolor="#2E6A9C" onclick="changecloth(this)">&nbsp</td>
                </tr>
              </table>
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
