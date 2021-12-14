<?php header("Progma:no-cache"); header("Cache-Control: no-store, no-cache ,must-revalidate"); ?>

<?php
session_start();
 ?>
<!DOCTYPE html>

<html lang="en">
<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$storeno = $_GET["storeno"];

$_SESSION['storeno']=$storeno;

$connect = new mysqli($servername, $username, $password);
if($connect -> connect_error){
  die("Connection failed: " + $conn->connect_error);
}

$dbname = "personalcolor";
mysqli_select_db($connect, $dbname) or die('DB selection failed');

$sql = "SELECT * FROM store WHERE StoreNo = '".$storeno."'";
$result = $connect->query($sql);
?>

<head>
  <title>P-Color Reservation Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <link  rel="stylesheet" href="../css/Main.css" >
  <link rel="stylesheet" href="../css/Reservation.css">
  <script type="text/javascript" src="../javascript/Reservation.js"></script>
  <script>


$(document).ready(function(){
  $('.review').on('click', function(){
    location.href='Review.php';
  });
});
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

  <!-- content div -->
  <div class="container-fluid">
    <div class="content">
      <!-- ReservationSection -->
      <section class="page_section" id="ReservationSection">
       <!-- ReservationSection content -->
        <div class="row">
          <div class="col-md-6" id="cam">
            <div>
              <img id="storeimg" src="../img/store1.jpg" alt="storeimg" class="ReservationSection_image img-resonsive">
            </div>
          </div>
          <div class="col-md-6" id="Info">
            <section class="" id="section1">
              <button class="review" type="button" name="button" >Review</button>
            </section>
            <!-- Reservation show1_InfoScreen -->
            <div class="show1 row">
              <div class="col-sm-5">
                <p class="storeInfo">Name</p>
                <p class="storeInfo">Price</p>
                <p class="storeInfo">H.P</p>
                <p class="storeInfo">Address</p>
                <p class="storeInfo">Time</p>
                <p class="storeInfo">Description</p>
              </div>
              <div class="col-sm-7">
                <?php while($storeinfo = mysqli_fetch_array($result)){ ?>
                <p class="storeInfo2"><?php echo $storeinfo["StoreName"] ?></p>
                <p class="storeInfo2"><?php echo $storeinfo["StorePrice"] ?></p>
                <p class="storeInfo2"><?php echo $storeinfo["StoreCall"] ?></p>
                <p class="storeInfo2"><?php echo $storeinfo["StoreAddress"] ?></p>
                <script> $("#storeimg").attr("src","../img/<?php echo $storeinfo["StoreImg"]?>.jpg"); </script>
                <?php
                $startTime = round($storeinfo["StoreTime"]/100,0);
                $endTime = $storeinfo["StoreTime"] % 100; ?>
                <p class="storeInfo2">a.m. <?php echo $startTime ?> : 00 ~ p.m. <?php echo $endTime ?> : 00</p>
                <p class="storeInfo2"><?php echo $storeinfo["StoreInfo"] ?></p>
                <?php } ?>
              </div>
          </div>
          <div class="show1">

          <hr id="res_hr">

          <div class="row">
            <form  action="reservationSave.php" method="post">
              <div class="col-sm-6" id="DateDiv">
                <!--<form>-->
                  <label class="nativeDatePicker">
                    <input type="date" name = "bday" id="selectDate">
                    <span class="validity"></span>
                  </label>
                <!--</form>-->
                <script src="Calendar.js"></script>
              </div>

              <div class="col-sm-6">
                <!--<form >-->
                  <select name = "res_time" size="1" id="res_time">
                    <?php
                    $a = $startTime;
                    $b = 1;
                    while($a < $endTime) { ?>
                    <option> <?php echo $a ?> : 00 ~ <?php echo $a + 2 ?> : 00 </option>
                    <?php
                    $a = $a+2;
                    $b = $b+1; } ?>
                  </select>
                <!--</form>-->
              </div>
             <input type="hidden" name = "storeName" value = <?php echo $storeno ?>></input>
             <input class="res_btn" type="submit" name="button" value="Reservation"></input>
           </form>
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