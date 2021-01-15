<?php
include 'demo_api/lib_include.php';

extract($_POST);

if (isset($_POST['signup'])) {
         // echo "string";

    $m->set_data('oname',$oname);
    $m->set_data('ename',$ename);
    $m->set_data('phone',$phone);
    $m->set_data('password',$password);
    $m->set_data('epicid',$epicid);
     $m->set_data('candidate',$candidate);

    $a = array('oname' => $m->get_data('oname'),'ename' => $m->get_data('ename'),'phone' => $m->get_data('phone'),'password' => $m->get_data('password'),'epicid' => $m->get_data('epicid'),'candidate' => $m->get_data('candidate'));

    $q=$d->insert("demo",$a);

              if($q == TRUE)
              { 
                header('location:../detail.php');
              }
              else 
              {
                echo "nooo";
              }
}
 
?>

        