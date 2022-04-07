<!DOCTYPE html>
<html lang="en">
<head>
    <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  
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
<body>
    <?php
    include 'conn.php';

    if(isset($_POST['btn_reg']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];

        $query="insert into user_data value(null,'$fname','$lname','$email','$phone','$username','$pass','$address','$gender')";
        if(mysqli_query($conn,$query))
        {
            header("Location:Login.php");
        }
        else
        {
            echo 'invalid';
        }
    }
    ?>
<section class="registration">
	<div class="container-fuild p-0">
		
			<div class="col-lg-12 col-md-12 p-0">
				<div class="registration-block bg-registration overlay-dark">
					<div class="block">
						<div class="title text-left">
							<h3>Sign up <span class="alternate"></span></h3>
						
						</div>
						<form action="Register.php" method="post" class="row">
							<div class="col-md-6">
								<input type="text" class="form-control main" name="fname" placeholder="First Name">
							</div>
                            <div class="col-md-6">
								<input type="text" class="form-control main" name="lname" placeholder="Last Name">
							</div>
                            <div class="col-md-6">
								<input type="email" class="form-control main" name="email" placeholder="Email">
							</div>
							<div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <label class="form-label">Male</label>
								<input type="radio" class="form-radio"  name="gender" value="Male">
                                <label class="form-label">Female</label>
                                <input type="radio" class="form-radio"  name="gender" value="Female">
							</div>
							<div class="col-md-6">
								<input type="number" class="form-control main" name="phone"placeholder="Phone">
							</div>
                            <div class="col-md-6">
								<input type="text" class="form-control main" name="username" placeholder="Username">
							</div>
                            <div class="col-md-6">
								<input type="password" class="form-control main" name="pass" placeholder="Password">
							</div>
                            <div class="col-md-6">
								<input type="address" class="form-control main" name="address" placeholder="Address">
							</div>
							
							<div class="col-12">
								<input type="submit" name="btn_reg"class="btn btn-white-md" value="Signup">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

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