<?php
include_once 'lib_include.php';


$response=array();


if (isset($_POST) && !empty($_POST)) {



	if ($key==$keydb) {

		extract(array_map("test_input", $_POST));
	
		if ($tag=="add_student") {
			$response["status"]=200;
			$response["messsage"]="Insert Data".$std_name;
			echo json_encode($response);
		}else if($tag=="get_student"){
			$response["status"]=200;
			$response["messsage"]="get Data";
			echo json_encode($response);
		}else{
			$response["status"]=201;
			$response["messsage"]="wrong tag..!";
			echo json_encode($response);
		}
		
		
	}else{

		$response["status"]=201;
		$response["messsage"]="Not valid";
		echo json_encode($response);
	}

}else{
	$response["status"]=201;
	$response["messsage"]="Not valid";
	echo json_encode($response);
}


?>
