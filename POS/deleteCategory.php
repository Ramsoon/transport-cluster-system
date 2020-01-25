<?php
	ob_start();
	require 'myConnection.php';

	if(isset($_GET['x'])){
		$id=$_GET['x'];
		$sql="DELETE FROM types WHERE category_id='$id'";
		$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
		}
		$sql="DELETE FROM categories WHERE category_id='$id'";
		$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
		if (!$result) {
		    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
		}
		header('Location: categories.php');
	}

?>