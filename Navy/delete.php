<?php

include 'db.php';
$pid = $_REQUEST['pid'];
mysqli_query($db,"DELETE FROM personal WHERE pid = '$pid'") or die (mysqli_error());
header ("location:edu_rec.php");
?>