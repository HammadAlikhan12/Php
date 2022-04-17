<?php
session_start();
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





<!--================================
=            Page Title            =
=================================-->
<?php
include 'conn.php';

if(isset($_POST['btn_log']))
{
$email=$_POST['email'];
$pass=$_POST['pass'];
$query="select * from user_data value where email='$email' and pass='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);
if($count>0)
{
	$id=$rows['user_id'];
	$_SESSION['user_id']=$row['user_id'];
	$_SESSION['username']= $row['username'];
  header("Location:Profile.php?id=".$id);
}
else
{ 
echo "<script>alert('Invalid username or password')</script>";
}

}
?>

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Login</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Login</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->




<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Login <span class="alternate"></span></h3>
					
				</div>
			</div>
		</div>
		<form action="Login.php" method="post" class="row">
			<div class="col-md-6">
				<input type="email" class="form-control main" name="email" placeholder="Email">
			</div>
			<div class="col-md-6">
				<input type="password" class="form-control main" name="pass" placeholder="Password">
			</div>	
			<div class="col-12 text-center">
				<input type="submit" name="btn_log" class="btn btn-main-md" value="Login">
			</div>
		</form>
	</div>
</section>




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