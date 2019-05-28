
<!--?php 	
session_start();
if(!isset($_SESSION["email"]))
{
	header("location:../index.php");
}
 ?-->
 <?php session_start();?>	
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Organic Vegetable Supply</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Organic Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/style3.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mada:200,300,400,500,600,700,900&amp;subset=arabic" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-sm-4 py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="index.php">Organic Food</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle toogle-2">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li class="active"><a href="home.php">Home</a></li>
								
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="index.php">Login</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="registration.php">Sign Up</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="main-w3pvt">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 style-banner">
						<div class="style-banner-inner">
							<h3 class="font-weight-bold text-uppercase"><span class="font-weight-normal">Live</span> Organic for <span class="font-weight-normal">Live</span>
								Healthy </h3>
							<p class="mt-3"><b>Fruits, Vegetables & Organic Fresh Food</b></p>
							
						</div>
					</div>
					<div class="col-lg-6 img-banner-w3 text-center">
						<div class="csslider infinity" id="slider1">
							<input type="radio" name="slides" checked="checked" id="slides_1" />
							<input type="radio" name="slides" id="slides_2" />
							<input type="radio" name="slides" id="slides_3" />
							<input type="radio" name="slides" id="slides_4" />
							<ul class="banner_slide_bg">
								<li>
									<img src="images/1.jpg" alt="" class="img-fluid">
								</li>
								<li>
									<img src="images/2.jpg" alt="" class="img-fluid">
								</li>
								<li>
									<img src="images/3.jpg" alt="" class="img-fluid">
								</li>
								<li>
									<img src="images/4.jpg" alt="" class="img-fluid">
								</li>
							</ul>
							<div class="navigation">
								<div>
									<label for="slides_1"></label>
									<label for="slides_2"></label>
									<label for="slides_3"></label>
									<label for="slides_4"></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main -->

	<!-- about -->
	

</body>

</html>