<?php
  ob_start();
	require 'myConnection.php';

$sql="
DELETE FROM `categories` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}

$sql="
DELETE FROM `customers` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}

$sql="
DELETE FROM `invoices` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}

$sql="
DELETE FROM `products` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}

$sql="
DELETE FROM `returns` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}

$sql="
DELETE FROM `sales` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}

$sql="
DELETE FROM `stocks` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}

$sql="
DELETE FROM `types` WHERE 1;
  ";
$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
if (!$result) {
    die('Invalid query: ' . mysqli_error($GLOBALS["___mysqli_ston"]));
}else{
	header('Location: index.php');	
}



?>