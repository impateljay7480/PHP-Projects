<?php
    if (isset($_POST['submit'])) {
    	
	// Authorisation details.
	$username = "piweather182@gmail.com";
	

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
	$name =$_POST['name'];

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_POST['phone'];
	$otp=mt_rand(100000,999999);// A single number or a comma-seperated list of numbers
	$message = "Lo Lai Lo  "  .$name. "  .le lukha le  "  .$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	echo "send succesfully";
	curl_close($ch);
}

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="demo1.php" method="post">



    	<input type="text" name="name"></br></br>
    	<input type="phone" name="phone"></br></br>
    	<input type="submit" name="submit" value="submit"></br></br>
    	<input type="text" name="otp"></br></br>
    	<input type="submit" name="verify" value="verify">
    	$hash = "962ab2af0418cf07ee2954a5a42da7a1e5c1ed4b0c035d1ef962432dadb63c65";
    </form>
</body>
</html>