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
  <link  rel="stylesheet" href="../css/Char.css" >
  <link  rel="stylesheet" href="../css/Main.css" >
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

  <!-- content div-->
  <div class="container-fluid">
    <div class="content">

      <!-- sectionc1 -->
      <section class="page_section" id="section1">
        <button type="button" name="button" id="spr" onclick="location.href='Spring.php'">SPRING</button>
        <button type="button" name="button" id="sum" onclick="location.href='Summer.php'">SUMMER</button>
        <button type="button" name="button" id="aut" onclick="location.href='Autumn.php'">AUTUMN</button>
        <button type="button" name="button" id="win" onclick="location.href='Winter.php'">WINTER</button>
      </section>

      <!-- sectionc2 -->
      <section class="page_section" id="section2">
        <img src="../img/wintertone.png" style="width:96%; display:block; margin:0 auto; ">
      </section>

      <!-- sectionc3 -->
      <section class="page_section" id="section3" style="background-color:#FFF5EE">
        <div class="section_title">
          <h3>"Winter Cool" Color Palette</h3>
        </div>
        <div class="section_content">
          <p>Winter colors are a group of cold and intense colors that contain blue, white, and black. Clear, strong, or very delicate Isean colors belong to this group. It's a palette with a modern and urban image.
            Colors that go well with winter types can be used in monotone such as white and black, and cold and clear colors and ice colors such as ice blue, ice pink, shock pink, wine red, lemon yellow, Christmas tree green, sapphire, etc. Winter colors give cold, modern, and charismatic images.</p>
            <img src="../img/w_palette.png" style="width:80%; display:block; margin:0 auto;">
          </div>
        </section>

        <!-- sectionc4 -->
        <section class="page_section" id="section4">
          <div class="section_title">
            <h3>Characteristics about "Winter Cool Tone"</h3>
          </div>
          <div class="row">
            <div class="col-md-6">
              <img class="img-responsive" src="../img/pccs4.png" alt="color">
            </div>
            <div class="col-md-6" id="section1_content_p">
              <p style="padding-top:100px;"><b>A person who is cool-toned in winter has a cold, intense, intelligent feeling,</b> and many people have a sophisticated image.
                It has a typical modern style with a clear and active image, so it has a presence and urban sense.
                The winter type is a cold type with blue, white, and black, which gives a clear, paletone, dark tone of modern and urban intensity.
              </p>
            </div>
          </div>
        </section>

        <!-- sectionc5 -->
        <section class="page_section" id="section5" style="background-color:#F8F8FF;">
          <div class="section_title">
            <h3>Make-Up Tips "Lip colors"</h3>
          </div>
          <div class="section_content">
            <p> Burgundy / Purple / Deep Rose / Plum / Cherry Series</p>
            <img src="../img/winterlip.png" style=" height: 100%; width:100%;  display : block ;  margin:0 auto;">
          </div>
        </section>

        <!-- sectionc6 -->
        <section class="page_section" id="section6">
          <div class="section_title">
            <h3>Make-Up Tips "Base and Blusher"</h3>
          </div>
          <div class="section_content">
            <p><b>[base]</b> Do not over-naturalize or darken! Let's express it in a relatively bright way. <br>
              <b>[blusher]</b> Strong blue pink series
            </p>
            <img src="../img/winterbase.png" style="height: 100%; width:100%; display : block ;  margin:0 auto;">
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
