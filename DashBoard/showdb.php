<?php
    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
    
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
        exit(0);
    }
	include("connection.php");
	global $dbc;
	
	$sql = "SHOW TABLES";
	$result = mysqli_query($dbc, $sql);
    $data = array();
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	    //echo $row['Tables_in_varitasales'];
		$sql1 = "DESCRIBE ".$row['Tables_in_techforf_vms'];
		$result1 = mysqli_query($dbc, $sql1);
		if (mysqli_num_rows($result1) > 0) {
		  // output data of each row
		  $fields = array();
		  while($row1 = mysqli_fetch_assoc($result1)) {
			  array_push($fields,$row1);
		  }
		$new = [$row['Tables_in_techforf_vms'],$fields];
		  array_push($data,$new);
		} 
	  }
	} 
	echo json_encode($data);
?>