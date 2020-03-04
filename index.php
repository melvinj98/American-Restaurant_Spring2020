<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The American Restaurant</title>
  <meta name="description" content="This is the official website for The American Restaurant">
  <meta name="author" content="The American Restaurant">

  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
	<div class="header">
		<?php include 'includes/header.php';?>
	</div>

	<div class="hero-image">
		<div class="hero-text">
			<h1>The American Restaurant</h1>
			<p>Official Website</p>
			<button onclick="makeReservation()">Make A Reservation</button>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				<br><img src="assets/images/food.jpg" width="100%"/>
			</div>
			<div class="col-sm">
			  <h2>Experience the Best American Food in Sparkill, NY</h2>
	          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

	          <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
			</div>
			<div class="col-sm">
				<br><img src="assets/images/drink.jpg" width="100%"/>
			</div>
		</div>
	</div>

  <div class="footer">
		<!--We will add include footer file here-->
	</div>
</body>
</html>
