<?php
include 'controller/connection.php';
session_start();
if (!isset($_SESSION["admin_no"])) {
     header("location:admin_login.php");
    
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
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- NavBar Containt -->

<nav class="navbar navbar-expand-sm bg-light">
  <!-- Brand/logo -->
  <a class="navbar-brand col-md-9 col-sm-6 col-xs-12" href="#">
    <img src="img/logo.png" alt="logo" style="width:300px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav col-md-3 col-sm-8 col-xs-12">
    <li class="nav-item">
      <a class="nav-link" href="controller/log-out.php">Logout</a>
    </li>
  </ul>
</nav>

<!-- main containt -->

<div class="container">
  <div class="head p-3 m-3 border">
      <div class="row">
        <?php
    $sql = "SELECT * FROM user_vote where party_name='bjp'";
    $result = $conn->query($sql);  
    while($row = $result->fetch_array()) {
                                 ?>
           <div class="col-md-3">
             <div class="text-center"><img src="img/bjp.png" height="200px;" width="200px;"></div></br>
             <div class="text-center"><h1>BJP</h1></div></br>
             <div class="text-center"><h2><?php echo $row['total'];?></h2></div> 
           </div>
        <?php } ?>
        <!-- <div>
          <span class="separator"></span>
        </div> -->
        <?php
    $sql = "SELECT * FROM user_vote where party_name='congress'";
    $result = $conn->query($sql);  
    while($row = $result->fetch_array()) {
                                 ?>
          <div class="col-md-3">
              <div class="text-center"><img src="img/congress.png" height="200px;" width="200px;"></div></br>
              <div class="text-center"><h1>CONGRESS</h1></div></br>
              <div class="text-center"><h2><?php echo $row['total'];?></h2></div>
           </div> <?php } ?>
        <!-- <div>
          <span class="separator"></span>
        </div> -->
        <?php
    $sql = "SELECT * FROM user_vote where party_name='aap'";
    $result = $conn->query($sql);  
    while($row = $result->fetch_array()) {
                                 ?>
           <div class="col-md-3">
            <div class="text-center"><img src="img/aap.png" height="200px;" width="200px;"></div></br>
            <div class="text-center"><h1>AAP</h1></div></br>
            <div class="text-center"><h2><?php echo $row['total'];?></h2></div>
           </div> <?php } ?>
        <!-- <div>
          <span class="separator"></span>
        </div> -->
        <?php
    $sql = "SELECT * FROM user_vote where party_name='other'";
    $result = $conn->query($sql);  
    while($row = $result->fetch_array()) {
                                 ?>
           <div class="col-md-3">
             <div class="text-center"><img src="img/other.png" height="200px;" width="200px;"></div></br>
             <div  class="text-center"><h1>OTHER</h1></div></br>
             <div class="text-center"><h2><?php echo $row['total'];?></h2></div>
           </div>  <?php } ?>
      </div>
  </div>
</div>


<!-- footer content -->

  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
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