<?php
   include 'connection.php';
   extract($_POST);  
   session_start();

    $query="SELECT * From admin_login where admin_no='$admin_no' and password='$password'" ;
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result);

    if (is_array($row)) 
				    {
                        $_SESSION["admin_id"]=$row['admin_id'];
                        $_SESSION["admin_no"]=$row['admin_no'];
				    	          header("location:../admin.php");
				    }
    else
    {
    	header("location:../index.php");
    }
?>