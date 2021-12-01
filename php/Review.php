<!DOCTYPE HTML>
<html>
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
  <div class="container">
    <!-- <h1 class="mt-5 mb-5">Review & Rating System in PHP & Mysql using Ajax</h1> -->
	<div class="card">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
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

  <div id="review_modal" class="modal" tabindex="-1" role="dialog">
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
	        		<input type="text" name="NickName" id="NickName" class="form-control" placeholder="Enter Your Name" />
	        	</div>
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
	.progress-label-left
	{
		float:left;
		margin-right:0.5em;
		line-height:1em;
	}
	.progress-label-right
	{
		float:right;
		margin-left:0.3em;
		line-height:1em;
	}
	.star-light
	{
		color:#e0ecef;
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
	
	$('#save_review').click(function(){
		var NickName = $('#NickName').val();
		var UserReview = $('#UserReview').val();
		if(NickName == '' || UserReview == '')
		{
			alert("빈 입력창을 채워주세요");
			return false;
		}
		else
		{
			$.ajax({
				url:"Submit_Rating.php",		
				method:"POST",
				data:{rating_data:rating_data, NickName:NickName, UserReview:UserReview},
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
				html += '<div class="row mb-3">';
				html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].NickName.charAt(0)+'</h3></div></div>';
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
