<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>


	  <?php 
	     include 'controller/connection.php';
                                    $sql = "SELECT * FROM demo WHERE ";
                                    $result = $conn->query($sql);  
                                    while($row = $result->fetch_array()) {
                                 ?>
    <form action="" method="POST">
	<label>candidate name</label>
	<input type="text" name="cname">
	<label>party name</label>
	<input type="text" name="pname">
     <input type="submit" name="save">
 </form>e
</body>
</html>