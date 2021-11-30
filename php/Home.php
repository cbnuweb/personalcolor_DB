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
  <link  rel="stylesheet" href="../css/Home.css" >
  <link  rel="stylesheet" href="../css/Main.css" >
  <script type="text/javascript" src="../javascript/ChartMap.js"></script>
  <script type="text/javascript">
  window.scrollTo(0,0);
  </script>
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

  <!-- carousel div -->
  <div id="myCarousel" class="container-fluid carousel slide text-center" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive" style="margin: auto; weight:100%;" src="../img/spring.png"/>
      </div>
      <div class="item">
        <img class="img-responsive" style="margin: auto; weight:100%;" src="../img/summer.png"/>
      </div>
      <div class="item">
        <img class="img-responsive" style="margin: auto; weight:100%;" src="../img/fall.png"/>
      </div>
      <div class="item">
        <img class="img-responsive" style="margin: auto; weight:100%;" src="../img/winter.png"/>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- content div-->
  <div class="container-fluid">
    <div class="content">
      <!-- section1 -->
      <section class="page_section" id="section1">
        <div class="section_title">
          <h2 class="section-heading text-uppercase">Personal Color</h2>
          <h3 class="section-subheading text-muted">A brief description of personal color.</h3>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img class="img-responsive" src="../img/color.png" alt="color">
          </div>
          <div class="col-md-6" id="section1_content_p">
            <h2>What is personal Color?</h2>
            <p>Personal Color has two meanings. <br><b>First</b>, it means the color of the body that an individual has since birth. It usually shows the color of the skin, hair, and eyes. <br><b>Second</b>, means the color that best matches the skin and hair of the individual and the eye color. Individuals have different unique colors, so they can distinguish between colors that suit them or not.</p>
          </div>
        </div>
      </section>

      <!-- section2 -->
      <section class="page_section" id="section2">
        <div class="section_title">
          <h2 class="section-heading text-uppercase">Personal Color 4type</h2>
          <h3 class="section-subheading text-muted">Four types of personal colors.</h3>
        </div>
        <div class="row">
          <!-- Portfolio item 1-->
          <div class="col-md-6" style="padding-bottom:15px;">
            <img class="img-responsive" src="../img/1.png" alt="spring" />
          </div>
          <!-- Portfolio item 2-->
          <div class="col-md-6">
            <img class="img-responsive" src="../img/2.png" alt="summer" />
          </div>
        </div>

        <div class="row">
          <!-- Portfolio item 3-->
          <div class="col-md-6 ">
            <img class="img-responsive" src="../img/3.png" alt="fall" />
          </div>
          <!-- Portfolio item 4-->
          <div class="col-md-6">
            <img class="img-responsive" src="../img/4.png" alt="winter" />
          </div>
        </div>
      </section>

      <!-- section3 -->
      <section class="page_section" id="section3">
        <div class="section_title" style="padding:0;">
          <h2 class="section-heading text-uppercase">Personal Color Tone Chart</h2>
          <h3 class="section-subheading text-muted">Personal Color Distribution Ratio</h3>
        </div>
        <div class="row">
          <div id="donutchart" style="width: 900px; height: 500px; margin:0 auto;"></div>
        </div>
      </section>

      <!-- section4 -->
      <section class="page_section" id="section4">
        <div class="section_title">
          <h2 class="section-heading text-uppercase">Nearby offline color test store</h2>
          <h3 class="section-subheading text-muted">Try the offline store for a more accurate examination.</h3>
        </div>
        <div class="row">
          <div id="map" style="width:930px; height: 500px; margin:0 auto;"></div>
        </div>
      </section>

      <!-- sectionc5 -->
      <section class="page_section" id="section5">
        <div class="section_title">
          <h2 class="section-heading text-uppercase">Contact</h2>
          <h3 class="section-subheading text-muted">If you have any questions about the site, please email.</h3>
        </div>
        <div class="row">
          <div class="col-md-4">
            <p><span class="glyphicon glyphicon-map-marker"></span>ChungJu, Korea</p>
            <p><span class="glyphicon glyphicon-phone"></span>Phone: +86 010-1234-5678</p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email: silverj125@chungbuk.ac.kr</p>
          </div>
          <form class="gform" action="https://script.google.com/macros/s/AKfycbxtmaieLVWHvxQtUaBIp2BeA9MPVn7pB2nC9WsC/exec" method="POST" data-email="silverj125@chungbuk.ac.kr">
            <div class="col-md-8">
              <div class="row">
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
              </div>
              <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
              <br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <button class="btn pull-right" type="submit">Send</button>
                </div>
              </div>
            </div>
          </form>

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4Jjr0DCbmbCD_9GOkLnyvyXSIR0VgC6c&callback=drawMap"></script>
    <script data-cfasync="false" type="text/javascript" src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
  </body>
  </html>
