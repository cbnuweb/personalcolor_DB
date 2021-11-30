
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
  <link  rel="stylesheet" href="../css/Test.css" >
  <script type="text/javascript" src="../javascript/Test.js"></script>
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
      <!-- surveysection -->
      <section class="page_section">
        <!-- surveysection title -->
        <div class="section_title">
          <h2 class="section-heading text-uppercase">Personal Color Test</h2>
          <h3 class="section-subheading text-muted" style="padding:0px;">Find your personal color</h3>
        </div>
        <!-- surveysection content -->
        <div class="testinsection_questdiv">
          <div id="q1_div">
            <h1>Question1</h1>
            <h4>What's your skin color?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q4" onclick="select(this);">White</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q2" onclick="select(this);">Black</button>
              </div>
            </div>
          </div>

          <div id="q2_div"  style="display:none;">
            <h1>Question2</h1>
            <h4>What's the color of your eyes?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q5" onclick="select(this);">Dark brown, Black</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q3" onclick="select(this);">Light brown</button>
              </div>
            </div>
          </div>

          <div id="q3_div"  style="display:none;">
            <h1>Question3</h1>
            <h4>Which eye shadow color suits you?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q4" onclick="select(this);">Gray series</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q11" onclick="select(this);">Brown series</button>
              </div>
            </div>
          </div>

          <div id="q4_div"  style="display:none;">
            <h1>Question4</h1>
            <h4>What's the impression of your eyes? </h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q5" onclick="select(this);">Strong</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q7" onclick="select(this);">Softness</button>
              </div>
            </div>
          </div>

          <div id="q5_div"  style="display:none;">
            <h1>Question5</h1>
            <h4>Which pink color suits you?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q10" onclick="select(this);">Hot Pink</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q8" onclick="select(this);">Coral Pink</button>
              </div>
            </div>
          </div>

          <div id="q6_div"  style="display:none;">
            <h1>Question6</h1>
            <h4>Do warm and lovely colors such as light pink or light yellow suit you?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q17" onclick="select(this);">Yes</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q14" onclick="select(this);">No</button>
              </div>
            </div>
          </div>

          <div id="q7_div"  style="display:none;">
            <h1>Question7</h1>
            <h4>How about wearing black with a bare face?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q10" onclick="select(this);">Clearly visible features</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q5" onclick="select(this);">Can't see face color</button>
              </div>
            </div>
          </div>

          <div id="q8_div"  style="display:none;">
            <h1>Question8</h1>
            <h4>Which accessory suits you?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q6" onclick="select(this);">Gold</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q9" onclick="select(this);">Silver</button>
              </div>
            </div>
          </div>

          <div id="q9_div"  style="display:none;">
            <h1>Question9</h1>
            <h4>Do calm and noble colors such as ocher, mustard, moss, and reddish brown suit you well?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q15" onclick="select(this);">Yes</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q16" onclick="select(this);">No</button>
              </div>
            </div>
          </div>

          <div id="q10_div"  style="display:none;">
            <h1>Question10</h1>
            <h4>What's your first impression</h4>
            <div class="testinsection_question row">
              <div class="col-sm-4">
                <button type="button" name="button" id="q13" onclick="select(this);">Strong</button>
              </div>
              <div class="col-sm-4">
                <button type="button" name="button" id="q11" onclick="select(this);">Softness</button>

              </div>
              <div class="col-sm-4">
                <button type="button" name="button" id="q8" onclick="select(this);">Normal</button>
              </div>
            </div>
          </div>

          <div id="q11_div"  style="display:none;">
            <h1>Question11</h1>
            <h4>What happens when exposed to sunlight?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-4">
                <button type="button" name="button" id="q9" onclick="select(this);">Burn easily</button>
              </div>
              <div class="col-sm-4">
                <button type="button" name="button" id="q8" onclick="select(this);">Doesn't burn easily</button>
              </div>
              <div class="col-sm-4">
                <button type="button" name="button" id="q12" onclick="select(this);">Neither</button>
              </div>
            </div>
          </div>

          <div id="q12_div"  style="display:none;">
            <h1>Question12</h1>
            <h4>What's your image?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q17" onclick="select(this);">Friendly and soft image</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q14" onclick="select(this);">Strong and cold image</button>
              </div>
            </div>
          </div>

          <div id="q13_div"  style="display:none;">
            <h1>Question13</h1>
            <h4>Which color suits you?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q14" onclick="select(this);">Vivid primary color</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q8" onclick="select(this);">Soft pastel color</button>
              </div>
            </div>
          </div>

          <div id="q14_div"  style="display:none;">
            <h1>Question14</h1>
            <h4>Which flower looks best on your face?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q18" onclick="select(this);">Red rose</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q17" onclick="select(this);">Pink tulip</button>
              </div>
            </div>
          </div>

          <div id="q15_div"  style="display:none;">
            <h1>Question15</h1>
            <h4>What's your hair color?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q18" onclick="select(this);">Dark brown, dark black</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="q14" onclick="select(this);">Light brown, soft black</button>
              </div>
            </div>
          </div>

          <div id="q16_div"  style="display:none;">
            <h1>Question16</h1>
            <h4>Does your face look young??</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="res_spr" onclick="location.href='Spring.php';">Yes</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="res_aut" onclick="location.href='Autumn.php';">No</button>
              </div>
            </div>
          </div>

          <div id="q17_div"  style="display:none;">
            <h1>Question17</h1>
            <h4>Which T-shirt color suits you well?</h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="q16" onclick="select(this);">A warm color with a yellow tint</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="res_sum" onclick="location.href='Summer.php';">A cold color with a blue tinge</button>
              </div>
            </div>
          </div>

          <div id="q18_div"  style="display:none;">
            <h1>Question18</h1>
            <h4>Which color would suit you if you wore a dark suit? </h4>
            <div class="testinsection_question row">
              <div class="col-sm-6">
                <button type="button" name="button" id="res_win" onclick="location.href='Winter.php';">Black, gray series</button>
              </div>
              <div class="col-sm-6">
                <button type="button" name="button" id="res_aut" onclick="location.href='Autumn.php';">Dark brown </button>
              </div>
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
