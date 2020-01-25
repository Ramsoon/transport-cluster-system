<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	$db =  mysqli_connect("localhost","root","","navy");
	$id=$_POST['pid'];
	$result = mysqli_query($db, "SELECT * FROM personal where pid='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$type=$row['HeighestQaul'];
				$route=$row['CourseOff'];
				$price=$row['WorkExp'];
				$seat=$row['Responsibility'];
				
			}
?>
<form action="execeditroute.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['pid'] ?>">
	Heighest Qualification:<br><input type="text" name="type" value="<?php echo $type ?>" class="ed"><br>
	Course Offered:<br><input type="text" name="route" value="<?php echo $route ?>" class="ed"><br>
	Work Experience:<br><input type="text" name="route" value="<?php echo $price ?>" class="ed"><br>
	Responsibility:<br><input type="text" name="seat" value="<?php echo $seat ?>" class="ed"><br>
	
	<input type="submit" value="Update" id="button1">
</form>