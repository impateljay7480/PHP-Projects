<?php 
$status =$statusMsg='';
if (isset($_POST['submit'])) {
	# code...

 if (!empty($_POST['email'])) 
 {

	 	require_once 'mailer/VerifyEmail.class.php';

	 	$mail= new VerifyEmail();

	 	$mail-> setStreamTimeoutWait(20);

	 	$mail->setEmailFrom('info@codexworld.com');

	 	$email=$_POST['email'];

		 	if ($mail->check($email))
		 	 {
		 		$status ='succ';
		 		$statusMsg ='giben gmail is '.$email.'exits';
			 	
			 }	elseif (VerifyEmail::validate($email)) 
			 	 {
					$status='ree';
					$statusMsg ='give the mail is'.$email.'valid but not exits';
				 }
			    else 
			     {
					$status='err';
					$statusMsg='give mail does not validate';
	              }	
 }	          
 else
 {
	$status='err';
 	$statusMsg='enter email add';
 }
}

 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">

		<input type="email" name="email">
	</br></br>
	<input type="submit" name="submit"></br></br>
		
	</form>

</body>
</html>