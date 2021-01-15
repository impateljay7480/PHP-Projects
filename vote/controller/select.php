<?php
include 'demo_api/lib_include.php';
extract($_SESSION);
extract($_POST);

if (isset($_POST['submit'])) 
{

   $epicid=$_SESSION['epicid'];
   $q=$d->select("unique_vote","epicid='$epicid'");
   $num=mysqli_fetch_array($q);

    if ($num == true) 
      {
        echo "you voted";
      }
    
    else{
             $m->set_data("epicid",$epicid);
             $z=array('epicid' => $m->get_data('epicid'));
             $q=$d->insert("unique_vote",$z);

                     // echo "string";
             $vote=$_POST['party_name'];
             $q=$d->select("user_vote","party_name='$party_name'");
               if ($a=mysqli_fetch_array($q)) 
                {
                  $id=$a['id'];
                  $total=$a['total'];
                  $total=$total+1;
                          // echo $total;
                          // exit(); 
                  $m->set_data("party_name",$party_name);
                  $m->set_data("total",$total);
                  $z=array('party_name' => $m->get_data('party_name'),
                    'total' => $m->get_data('total'));
                  $q=$d->update("user_vote",$z,"id=$id");
                  if($q == true)
                    {
                      header('location:log-out.php');
                    }
                }
                else
                {
                    $total=$total+1;
                    $m->set_data("party_name",$party_name);
                    $m->set_data("total",$total);
                    $z=array('party_name' => $m->get_data('party_name'),
                      'total' => $m->get_data('total'));
                    $q=$d->insert("user_vote",$z);
                    if($q == true)
                        {
                          header('location:log-out.php');
                        }
                }
        }
}

else{
 header('location:../vote.php');
}
?>