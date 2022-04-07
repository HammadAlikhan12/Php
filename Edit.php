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
					<h3>Edit</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Edit</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->

<?php
$id = $_GET['id'];
include 'conn.php';
$query_select="select * from product where Product_id='$id'  ";
$result=mysqli_query($conn,$query_select);
$rows=mysqli_fetch_array($result);

if(isset($_POST['btn_update']))
{
$Product_id=$_POST['Product_id'];
$Product_name=$_POST['Product_name'];
$Price=$_POST['Price'];
$Qty=$_POST['Qty'];

$query_update="update product set Product_name='$Product_name',Price='$Price',Qty='$Qty' where Product_id='$Product_id'  ";
$result=mysqli_query($conn,$query_update);
if($result)
{
    header('Location:Schedule.php');
}

}
?>


<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Get in <span class="alternate">Touch</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, velit.</p>
				</div>
			</div>
		</div>
		<form action="Edit.php" method="post" class="row">
		
				<input type="hidden" class="form-control main" name="Product_id" id="id" value="<?php echo $rows['Product_id']?>">
		
        <div class="col-md-6">
				<input type="text" class="form-control main" name="Product_name" id="name" value="<?php echo $rows['Product_name']?>">
			</div>
			<div class="col-md-6">
				<input type="number" class="form-control main" name="Price" id="email" value="<?php echo $rows['Price']?>">
			</div>
			<div class="col-md-12">
				<input type="number" class="form-control main" name="Qty" id="phone" value="<?php echo $rows['Qty']?>">
			</div>
			
			<div class="col-md-4 text-center">
				<input type="submit" class="btn btn-main-md" name="btn_update" value="Save">
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

<!--============================
=            Footer            =
=============================-->

<?php include 'Footer.php';?>


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