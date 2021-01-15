<?php
include 'demo_api/lib_include.php';

extract($_POST);

if (isset($_POST['signup'])) 
{
         // echo "string";
  
         $email=$_POST['email'];
         $q=$d->select("user_login","email='$email'");

          if ($a=mysqli_fetch_array($q)) 
          { 
             header('location:../sign_up.php');
          }

         else
          { 
              
                  $m->set_data('name',$name);
                  $m->set_data('birthdate',$birthdate);
                  $m->set_data('email',$email);
                  $m->set_data('password',$password);
                  $m->set_data('epicid',$epicid);

                  $a = array('name' => $m->get_data('name'),'birthdate' => $m->get_data('birthdate'),'email' => $m->get_data('email'),'password' => $m->get_data('password'),'epicid' => $m->get_data('epicid'));

                  $q=$d->insert("user_login",$a);

                            if($q == TRUE)
                            { 
                              include 'mail.php';
                              header("location:../index.php");
                            }
                            else 
                            {
                              header("location:sign_up.php");
                            }
              }     
              }        
              else
              { 
                  /*header('location:../sign_up.php'); */
                  echo "lol";
              } 
      
?>

        