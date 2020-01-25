<?php

$connect = mysqli_connect("localhost", "root", "", "navy");
if(isset($_POST["army"]))
{
    $query = "SELECT * FROM personal WHERE pid = '".$_POST["army"]."'";
    $result = mysqli_query($connect, $query);
    $sa = mysqli_fetch_array($result);
    echo json_encode($sa);
}
?>