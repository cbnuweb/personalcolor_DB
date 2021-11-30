<?php
$connect = new PDO("mysql:host=localhost; dbname=personalcolor", "root", "root");

if(isset($_POST["rating_data"])) //DB에 보내기
{

	$data = array(
		':NickName'			=>	$_POST["NickName"],
		':UserRating'		=>	$_POST["rating_data"],
		':UserReview'		=>	$_POST["UserReview"],
		':datetime'			=>	time()
	);

	$query = "
	INSERT INTO review 
	(NickName, UserRating, UserReview, datetime) 
	VALUES (:NickName, :UserRating, :UserReview, :datetime)
	";

	$statement = $connect->prepare($query);
	$statement->execute($data);

	echo "별점과 리뷰가 성공적으로 등록되었습니다^^";

}

if(isset($_POST["action"]))
{
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "
	SELECT * FROM review
	ORDER BY ReviewId DESC
	";

	$result = $connect->query($query, PDO::FETCH_ASSOC);

	

	foreach($result as $row)
	{
		$review_content[] = array(
			'NickName'		=>	$row["NickName"],
			'UserReview'	=>	$row["UserReview"],
			'rating'		=>	$row["UserRating"],
			'datetime'		=>	date('l jS, F Y H:i:s A', $row["datetime"])
		);

		if($row["UserRating"] == '5')
		{
			$five_star_review++;
		}

		if($row["UserRating"] == '4')
		{
			$four_star_review++;
		}

		if($row["UserRating"] == '3')
		{
			$three_star_review++;
		}

		if($row["UserRating"] == '2')
		{
			$two_star_review++;
		}

		if($row["UserRating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["UserRating"];

	}

	$average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}
?>