<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="en">

<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

$storeno = $_SESSION['storeno'];

$connect = new mysqli($servername, $username, $password);
if($connect -> connect_error){
  die("Connection failed: " + $conn->connect_error);
}

$dbname = "personalcolor";
mysqli_select_db($connect, $dbname) or die('DB selection failed');

$sql = "SELECT * FROM review WHERE Store_No = '{$storeno}'";
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
    
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link  rel="stylesheet" href="../css/Main.css" >

  <!-- 다시 스토어 정보 창으로 넘어가기  -->
  <script>
   $(document).ready(function(){
      $('.home').on('click', function(){
         location.href='Reservation.php?storeno='+<?php echo $_SESSION['storeno']?>;
      });
   });
   </script>
</head>

<!-- <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="padding-top:80px;"> -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
  <div class="container">
     <div class="content">
     <section class="" id="section1">
              <button class="home" type="button" name="button" >Back to Store Info</button>
              <!-- <button class="review" type="button" name="button" onclick="location.href='Review.php'">Review</button> -->
            </section>
      <div class="card">
          <!-- <div class="card-header">Sample Product</div> -->
          <div class="card-body">
             <div class="row">
                <div class="col-sm-4 text-center">
                   <h1 class="text-warning mt-4 mb-4">
                      <b style="font-weight:bold; color: #ffc107!important; font-size:40px;"><span id="average_rating">0.0</span> / 5</b>
                   </h1>
                   <div class="mb-3">
                      <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                   </div>
                   <h3><span id="total_review">0</span> Review</h3>
                </div>
                <div class="col-sm-4">
                   <p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
                   <p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
                   <p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
                   <p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
                   <p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
                </div>
                <div class="col-sm-4 text-center">
                   <h3 class="mt-4 mb-3">Write Review Here</h3>
                   <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                </div>
             </div>
          </div>
       </div>
       <div class="mt-5" id="review_content"></div>
   </div>
</div>

  <!--footer-->
  <footer class="container-fluid text-center" id="footer" style="margin-top:50px;">
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

  <!-- 모달 -->
  <div id="review_modal" class="modal" tabindex="-1" role="dialog" style="display:none;" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Submit Review</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <h4 class="text-center mt-2 mb-4">
                 <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
              </h4>
              <div class="form-group">
                 <textarea name="UserReview" id="UserReview" class="form-control" placeholder="Type Review Here"></textarea>
              </div>
              <div class="form-group text-center mt-4">
                 <button type="button" class="btn btn-primary" id="save_review">Submit</button>
              </div>
            </div>
       </div>
     </div>
</div>

<style>
   .home{
      /* margin-left:30px; */
      text-align:center;
      width:20%;
      height:40px;
      border:1px solid white;
      color:white;
      font-weight: bold;
      border-radius: 5px;
      background-color:#FFB900;
      letter-spacing: 2px;
	  margin-bottom:5px;
   }

   .review{
      text-align:center;
      width:20%;
      height:40px;
      border:1px solid white;
      color:white;
      font-weight: bold;
      border-radius: 5px;
      background-color:#FFB900;
      letter-spacing: 2px;
   }

   .content{
      margin-top:10em;
      width: 90%;
   }
   .progress-label-left{
      float:left;
      margin-right:0.5em;
      line-height:1em;
   }
   .progress-label-right{
      float:right;
      margin-left:0.3em;
      line-height:1em;
   }
   .star-light{
      color:#e0ecef;
   }

   /*리뷰창*/
   .card {
      position: relative;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0,0,0,.125);
      border-radius: 0.25rem;
   }
   .card-header:first-child {
      border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
   }
   .card-header {
      padding: 0.75rem 1.25rem;
      margin-bottom: 0;
      background-color: rgba(0,0,0,.03);
      border-bottom: 1px solid rgba(0,0,0,.125);
   }
   .card-body {
      -webkit-box-flex: 1;
      flex: 1 1 auto;
      padding: 1.25rem;
   }
   .card-footer {
      padding: 0.75rem 1.25rem;
      background-color: rgba(0,0,0,.03);
      border-top: 1px solid rgba(0,0,0,.125);
   }
   .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
      padding-top:20px;
   }
   .text-warning {
      color: #ffc107!important; 
   }
   .mb-4, .my-4 {
      margin-bottom: 1.5rem!important;
   }
   .mt-4, .my-4 {
      /* margin-top: 1.5rem!important; */
   }
   .mb-3, .my-3 {
      margin-bottom: 1rem!important;
   }
   .mr-1, .mx-1 {
      margin-right: 0.25rem!important;
   }
   .mt-5, .my-5 {
      margin-top: 3rem!important;
   }   
   .progress {
      display: flex;
      height: 2rem;
      overflow: hidden;
      font-size: .75rem;
      background-color: #e9ecef;
      border-radius: 0.25rem;
      margin-bottom: 10px;
   }
   .bg-warning {
    background-color: #ffc107!important;
   }  
   .progress-bar {
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-direction: column;
      -webkit-box-pack: center;
      justify-content: center;
      color: #fff;
      text-align: center;
      /* background-color: #007bff; */
      transition: width .6s ease;
   }
   .text-warning {
      color: #ffc107!important;
   }

   /*이름첫글짜 동글이*/
   .text-white {
      color: #fff!important;
   }
    .pt-2, .py-2 {
      padding-top: 0.5rem!important;
   }
   .rounded-circle {
      border-radius: 50%!important;
      color: #fff!important;
   }
   .btn-primary {
      color: #fff;
      background-color: #769fcd;
	  border-color: #769fcd;
      /* border-color: #007bff; */
   }
   .bg-danger {
      background-color: #FA8072;!important;
      /* background-color: #dc3545!important; */
   }

   /*모달*/
   .modal-open .modal {
      overflow-x: hidden!important;
      overflow-y: auto!important;
      }
   .modal {
      position: fixed;
      top: 20%;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1050;
      display: none;
      overflow: hidden!important;
      outline: 0;
   }
   .close:not(:disabled):not(.disabled) {
      cursor: pointer;
   }
   .modal-header .close {
      padding: 1rem;
      margin: -1rem -1rem -1rem auto;
   }
   button.close {
      background-color: transparent;
      border: 0;
      -webkit-appearance: none;
   }
   .close {
      float: right;
      font-size: 1.5rem;
      font-weight: 700;
      line-height: 1;
      color: #000;
      text-shadow: 0 1px 0 #fff;
      opacity: .5;
   }
   h5 {
      display: block;
      margin-block-start: 1.67em;
      margin-block-end: 1.67em;
      margin-inline-start: 0px;
      margin-inline-end: 0px;
   }
   .modal-title {
      margin-bottom: 0;
      line-height: 1.5;
   }
   .modal-dialog {
      max-width: 500px;
      margin: 1.75rem auto;
      position: relative;
      width: auto;
      pointer-events: none;
   }
   .modal-content {
      position: relative;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0,0,0,.2);
      border-radius: 0.3rem;
      outline: 0;
      box-shadow: 0 5px 15px rgb(0 0 0 / 50%);
   }
   .modal-header {
      display: flex;
      -webkit-box-align: start;
      align-items: flex-start;
      -webkit-box-pack: justify;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 1px solid #e9ecef;
      border-top-left-radius: 0.3rem;
      border-top-right-radius: 0.3rem;
   }
   .modal-body {
      position: relative;
      -webkit-box-flex: 1;
      flex: 1 1 auto;
      padding: 1rem;
   }
   .modal-backdrop.show {
      opacity: .5;
   }
   .modal-backdrop {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1040;
      background-color: #000;
   }
   .form-control {
      display: block;
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 15px;
      font-weight: 300;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
   }   
</style>


<script>
$(document).ready(function(){

   var rating_data = 0;

   $('#add_review').click(function(){
      $('#review_modal').modal('show');
   });
   $(document).on('mouseenter', '.submit_star', function(){
      var rating = $(this).data('rating');

      reset_background(); // 별모양 배경 제거

      for(var count = 1; count <= rating; count++)
      {
         $('#submit_star_'+count).addClass('text-warning');
         }
   });

   function reset_background(){
      for(var count = 1; count <= 5; count++)
      {
         $('#submit_star_'+count).addClass('star-light');
         $('#submit_star_'+count).removeClass('text-warning');
      }
   }
   
   $(document).on('mouseleave', '.submit_star', function(){
      reset_background();
      for(var count = 1; count <= rating_data; count++)
      {
         $('#submit_star_'+count).removeClass('star-light');
         $('#submit_star_'+count).addClass('text-warning');
      }
   });
   
   $(document).on('click', '.submit_star', function(){
      rating_data = $(this).data('rating');
   });
   

   /*php*/
   $('#save_review').click(function(){
      var UserReview = $('#UserReview').val();
      if( UserReview == '')
      {
         alert("Please fill in the input window.");
         return false;
      }
      else
      {
         $.ajax({
            url:"Submit_Rating.php",      
            method:"POST",
            data:{rating_data:rating_data,  UserReview:UserReview},
            success:function(data)
            {
               $('#review_modal').modal('hide');
               load_rating_data(); //업데이트 리뷰
               alert(data);
            }
   })
}

});

load_rating_data();

// 댓글뜨게
function load_rating_data()
{
$.ajax({
   url:"Submit_Rating.php",
   method:"POST",
   data:{action:'load_data'},
   dataType:"JSON",
   success:function(data)
   {
      $('#average_rating').text(data.average_rating);
      $('#total_review').text(data.total_review);

      var count_star = 0;

      $('.main_star').each(function(){
         count_star++;
         if(Math.ceil(data.average_rating) >= count_star)
         {
            $(this).addClass('text-warning');
            $(this).addClass('star-light');
         }
      });

      $('#total_five_star_review').text(data.five_star_review);
      $('#total_four_star_review').text(data.four_star_review);
      $('#total_three_star_review').text(data.three_star_review);
      $('#total_two_star_review').text(data.two_star_review);
      $('#total_one_star_review').text(data.one_star_review);
      $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');
      $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');
      $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');
      $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');
      $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

      if(data.review_data.length > 0)
      {
         var html = '';

         for(var count = 0; count < data.review_data.length; count++)
         {
            html += '<div class="row mb-3">';    //style="text-align:center; font-weight:bold; margin-left:10px;"
            html += '<div class="col-sm-1"><div class="rounded-circle bg-danger"><h3 class="text-center" style="padding-top:8px; padding-bottom:14px; text-align:center; color:white; font-size:30px;">'+data.review_data[count].NickName.charAt(0)+'</h3></div></div>';
            html += '<div class="col-sm-11">';
            html += '<div class="card">';
            html += '<div class="card-header"><b>'+data.review_data[count].NickName+'</b></div>';
            html += '<div class="card-body">';

            for(var star = 1; star <= 5; star++)
            {
               var class_name = '';

               if(data.review_data[count].rating >= star)
               {
                  class_name = 'text-warning';
               }
               else
               {
                  class_name = 'star-light';
               }

               html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
            }

            html += '<br />';
            html += data.review_data[count].UserReview;
            html += '</div>';
            html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
         }
         $('#review_content').html(html);
      }
   }
})
}

});
</script>