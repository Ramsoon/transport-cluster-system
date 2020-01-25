<?php
	$host="localhost";
	$username="root";
	$password="";
	$database="pos";
	$con=($GLOBALS["___mysqli_ston"] = mysqli_connect($host, $username, $password));
	if(!$con){
		die("can not connect:".mysqli_error($GLOBALS["___mysqli_ston"]));
	}
	mysqli_select_db($con, $database);	
    date_default_timezone_set("Africa/Lagos");
    $entryDate=date("Y-m-d H:i:s"); 
    
?>