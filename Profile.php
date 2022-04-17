<?php
include 'conn.php';
session_start();
if($_SESSION['user_id']==null)
{
    header("Location:Index.php");
}
$id=$_SESSION['user_id'];
$query="select * from user_data where user_id='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eventre</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<?php
include 'Navbar.php';
?>


<!--====  End of Navigation Section  ====-->



<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Speaker Details</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Speaker Details</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->



<section class="section single-speaker">
	<div class="container">
		<div class="block">
			<div class="row">
				<div class="col-lg-5 col-md-6 align-self-md-center">
					<div class="image-block">
						<img src="images/speakers/single-speaker.jpg" class="img-fluid" alt="speaker">
					</div>
				</div>
				<div class="col-lg-7 col-md-6 align-self-center">
					<div class="content-block">
						<div class="name">
							<h3><?php echo $_SESSION['username']?></h3>
						</div>
						<div class="profession">
							<p><?php echo $row['email']?></p>
						</div>
						<div class="details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud.laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
							Duis aute irure dolor in reprehenderit in voluptate velit esse.
							<br>
							</p>
							<p>
							Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
							<br> 
							Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
						</div>
						<div class="social-profiles">
							<h5>Social Profiles</h5>
							<ul class="list-inline social-list">
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-skype"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="block-2">
			<div class="row">
				<div class="col-md-6">
					<div class="personal-info">
						<h5>Personal Information</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi explicabo suscipit deleniti voluptatum quos nostrum iure doloremque cupiditate voluptatem a enim eaque quod perspiciatis repudiandae, mollitia adipisci ea, quidem eveniet consequatur veniam error. Adipisci, suscipit corporis repellat, soluta vitae deserunt perspiciatis labore reprehenderit sapiente provident vel maxime.</p>
						<ul class="m-0 p-0">
							<li><?php echo $row['fname']?></li>
							<li><?php echo $row['lname']?></li>
							<li><?php echo $row['phone']?></li>
							<li><?php echo $row['address']?></li>
							<li><?php echo $row['gender']?></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="skills">
						<h5>Personal Skills</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis repellat inventore at praesentium perspiciatis labore reprehenderit sapiente provident vel maxime.</p>
						<div class="skill-bars">
							<!-- SkillBar -->
							<div class="skill-bar">
								<!-- Title -->
								<p>Wordpress</p>
								<!-- Progress Bar -->
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 90%;"><span>90%</span></div>
								</div>
							</div>
							<!-- SkillBar -->
							<div class="skill-bar">
								<!-- Title -->
								<p>PHP</p>
								<!-- Progress Bar -->
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 75%;">
								  	<span>75%</span>
								  </div>
								</div>
							</div>
							<!-- SkillBar -->
							<div class="skill-bar">
								<!-- Title -->
								<p>Javascript</p>
								<!-- Progress Bar -->
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 60%;">
								  	<span>60%</span>
								  </div>
								</div>
							</div>
							<!-- SkillBar -->
							<div class="skill-bar">
								<!-- Title -->
								<p>HTML</p>
								<!-- Progress Bar -->
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 80%;">
								  	<span>80%</span>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter</span></h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p>
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->

<!--================================
=            Google Map            =
=================================-->

<section class="map">
	<!-- Google Map -->
	<div id="map"></div>
	<div class="address-block">
		<h4>Docklands Convention</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>Street Address, Location, <br>City, Country.</span></li>
			<li><i class="fa fa-phone"></i><span>[00] 000 000 000</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">Get Direction</a>
	</div>
</section>

<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<?php
include 'Footer.php';
?>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>