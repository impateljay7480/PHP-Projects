<?php
session_start();

if (isset($_SESSION["id"])) {

    header("location:vote.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
	<title>E-Vote | Index</title>
	<link rel="icon" href="img/34.png" type="image/x-icon">
	<link rel="icon" href="images/logo.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/log-in.css">
	  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- NavBar Containt -->

<nav class="navbar navbar-expand-sm bg-light ">
  <!-- Brand/logo -->
  <a class="navbar-brand col-md-9 col-sm-6 col-xs-12" href="index.php">
    <img src="img/logo.png" alt="logo" style="width:300px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav col-md-3 col-sm-8 col-xs-12">
    <li class="nav-item">
      <a class="nav-link" href="admin_login.php">Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="sign_up.php">Sign-Up</a>
    </li>
  </ul>
</nav>

<!-- Main Content -->

<div class="container ">
	
	<div class="row  p-5 my-3 border border-dark">	
		<div class="in col-md-4 col-sm-6 col-xs-12">
      		<form action="controller/sign-in.php" method="POST">
      		<label class="font-weight-bold">Epic No.</label>
      		<input type="text" class="form-control" name="epicid"></br>
      		<label class="font-weight-bold" >Password.</label>
      		<input type="Password" class="form-control" name="password">
      		<input type="hidden" name="epicno" value="<?php echo(rand())?>">
      		<button type="submit" name="log_in" class="btn btn-success">Log In</button>	
      		</form>	
		</div>
		<div class="main col-md-8 col-sm-10 col-xs-12">
			 <img src="img/55.jpg" alt="E-Vote" class="mt-3">
		</div>
	</div>


<!-- curousel content -->

	<div id="demo" class="carousel slide" data-ride="carousel">

	
		<ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		</ul>
	  

	    <div class="carousel-inner">
	      <div class="carousel-item active">
	        <img src="img/3.png" alt="Los Angeles" width="1200" height="500">
	      </div>
	      <div class="carousel-item">
	        <img src="img/45.jpg" alt="Chicago" width="1200" height="500">
	      </div>
	      <div class="carousel-item">
	        <img src="img/farmer.jpg" alt="New York" width="1200" height="500">
	      </div>
	    </div>
	  
	
	    <a class="carousel-control-prev" href="#demo" data-slide="prev">
	      <span class="carousel-control-prev-icon"></span>
	    </a>
	    <a class="carousel-control-next" href="#demo" data-slide="next">
	      <span class="carousel-control-next-icon"></span>
	    </a>
    </div>	
</div></br>

 <!-- full-width img Content -->

<div class="fix">
	<img src="img/123.jpg" alt="about us">
</div></br>

<div class="container">
	<p>
		India is a Socialist, Secular, Democratic Republic and the largest democracy in the World. The modern Indian nation state came into existence on 15th of August 1947. Since then free and fair elections have been held at regular intervals as per the principles enshrined in the Constitution, Electoral Laws and System.</br></br></br>

		The Constitution of India has vested in the Election Commission of India the superintendence, direction and control of the entire process for conduct of elections to Parliament and Legislature of every State and to the offices of President and Vice-President of India.</br></br></br>

		Election Commission of India is a permanent Constitutional Body. The Election Commission was established in accordance with the Constitution on 25th January 1950. The Commission celebrated its Golden Jubilee in 2001.</br></br></br>

		Originally the commission had only a Chief Election Commissioner. It currently consists of Chief Election Commissioner and two Election Commissioners.</br>
		For the first time two additional Commissioners were appointed on 16th October 1989 but they had a very short tenure till 1st January 1990. Later, on 1st October 1993 two additional Election Commissioners were appointed. The concept of multi-member Commission has been in operation since then, with decision making power by majority vote.</br></br></br>

		The Commission has a separate Secretariat at New Delhi, consisting of about 300 officials, in a hierarchical set up.
	</p>
</div>

<!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Our Company</h6>
            <p class="text-justify">PiWeather.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">C</a></li>
              <li><a href="#">UI Design</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">Java</a></li>
              <li><a href="#">Android</a></li>
              <li><a href="#">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Pi Weather</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
    
		



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>