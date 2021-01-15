<?php
   include 'connection.php';
   include'demo_api/lib_include.php';
   extract($_POST);  

    $query="SELECT * From user_login where epicid='$epicid' and password='$password'" ;
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);

    if (is_array($row)) 
				    {
                        $_SESSION["id"]=$row['id'];
                        $_SESSION["epicid"]=$row['epicid'];
                        
				    	          header("location:select.php");
				    }
    else
    {
    	
    	header("location:../index.php");
    }



      
     


?>