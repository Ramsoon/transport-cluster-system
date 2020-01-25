<?php
	require 'myConnection.php';
	if(isset($_GET['x'])){
		$id=$_GET['x'];
		$sql="SELECT amount FROM returns WHERE return_id='$id'";
		$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
		}
		if(mysqli_num_rows($result)){
			$row=mysqli_fetch_array($result);
			$amount=$row['amount'];
			echo $amount;
		}
	}

?>