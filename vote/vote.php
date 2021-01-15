<?php
// include_once 'controller/demo_api/lib_include.php';  
session_start();
if (!isset($_SESSION["id"])) {
     header("location:index.php");
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
  <title>E-Vote | VOTE</title>
  <link rel="icon" href="img/34.png" type="image/x-icon">
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/vote.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- NavBar Containt -->

<nav class="navbar navbar-expand-sm bg-light">
  <!-- Brand/logo -->
  <a class="navbar-brand col-md-9 col-sm-6 col-xs-12" href="index.php">
    <img src="img/logo.png" alt="logo" style="width:300px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav col-md-3 col-sm-6 col-xs-12">
    <li class="nav-item">
      <a class="nav-link" href="#">Schedule</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="controller/log-out.php">Logout</a>
    </li>
  </ul>
</nav>

<!-- main containt -->
<div class="containt">
<div class="container">
  <div class="head p-3 m-3 border">
        <h1 align="center"> Election Of 2020</h1>
        <hr>
        <h4 align="center"> Election Parties</h4>
        <hr>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <form action="controller/select.php" method="POST" enctype="multipart/form-data">
            <div class="row ml-2">
                <div class="col-md-10 col-sm-8 col-xs-12">
                   <div class="row">
                      <h6 class="my-auto">(1)</h6>
                      <div class="ml-3"><img src="img/bjp.png"  name="img" height="100px;" width="100px;"></div>
                      <div class="ml-5">
                        <a>Candidate Name:</a>
                        <h5>JAY PATEL</h5>
                        <a>Party Name:</a>
                        <h5>BJP</h5>    
                      </div>
                   </div>
                 </div>
                      <div class="col-md-2 col-sm-4 col-xs-12 ">
                        <div class="radio"><input type="radio" name="party_name" id="male"  value="bjp"></div>
                      </div>
            </div><hr>
            <div class="row ml-2">
                <div class="col-md-10 col-sm-8 col-xs-12">
                   <div class="row">
                      <h6 class="my-auto">(2)</h6>
                      <div class="ml-3"><img src="img/aap.png" name="img" height="100px;" width="100px;"></div>
                      <div class="ml-5">
                        <a>Candidate Name:</a>
                        <h5>MNTHAN</h5>
                        <a>Party Name:</a>
                        <h5>AAP</h5>    
                      </div>
                   </div>
                 </div>
                      <div class="col-md-2 col-sm-4 col-xs-12 my-auto">
                        <div class="radio"><input type="radio" name="party_name" id="male"  value="aap"></div>
                      </div>
            </div><hr> 
            <div class="row ml-2">
                <div class="col-md-10 col-xs-12 col-sm-8 ">
                   <div class="row">
                      <h6 class="my-auto">(3)</h6>
                      <div class="ml-3"><img src="img/congress.png" name="img" height="100px;" width="100px;"></div>
                      <div class="ml-5">
                        <a>Candidate Name:</a>
                        <h5>UMANG PATEL</h5>
                        <a>Party Name:</a>
                        <h5>CONGRESS</h5>    
                      </div>
                   </div>
                 </div>
                      <div class="col-md-2 col-sm-4 col-xs-12 my-auto">
                        <div class="radio"><input type="radio" name="party_name" id="male"  value="congress"></div>
                      </div>
            </div><hr>
            <div class="row ml-2">
                <div class="col-md-10 col-xs-12 col-sm-8">
                   <div class="row">
                      <h6 class="my-auto">(4)</h6>
                      <div class="ml-3"><img src="img/other.png" name="img" height="100px;" width="100px;"></div>
                      <div class="ml-5">
                        <a>Candidate Name:</a>
                        <h5>SUBHAM</h5>
                        <a>Party Name:</a>
                        <h5>OTHER</h5>    
                      </div>
                   </div>
                 </div>
                      <div class="col-md-2  col-sm-4 col-xs-12 my-auto">
                        <div class="radio"><input type="radio" name="party_name" id="male"  value="other"></div>
                      </div>
            </div><hr>
            
            <div class="row justify-content-center">
                <button type="Submit" class="btn btn-success m-3" value="1" name="submit">Submit</button>
                <button type="Cancle" class="btn btn-danger m-3">Cancle</button>
            </div>
          </form>
        </div>
        <!-- <div>
          <span class="separator"></span>
        </div> -->
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row">
              <div class="col-md-4">
                <a>NAME:</a></br>
                <a>Email:</a></br>
                <a>Birthdate:</a></br>
                <a>epicid:</a>
              </div>
            </dir>
        </div>
    </div>
  </div>
</div>
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