<?php 
	$conn = mysqli_connect("localhost", "root", "","navy");
	
	// Define the query:
	$pid=$_POST['pid'];
	$hq=$_POST['hq'];//SADIQ'
	$co=$_POST['co'];
	$cof=$_POST['cof'];
	$we=$_POST['we'];
	$r=$_POST['r'];
	
	$pid = mysqli_real_escape_string($conn,$pid);
	$hq= mysqli_real_escape_string($conn,$hq);
$co= mysqli_real_escape_string($conn,$co);
$cof= mysqli_real_escape_string($conn,$cof);
$we= mysqli_real_escape_string($conn,$we);
$r= mysqli_real_escape_string($conn,$r);



	$query = "INSERT INTO user (pid, HeighestQaul, CertObtain, CourseOff, WorkExp, Responsibility, reg_date)
	VALUES('$pid', '$hq', '$co', '$cof', '$we', '$r', CURRENT_TIMESTAMP)";
				//echo $query;
	// Execute the query:
	if (@mysqli_query($conn, $query)) 
	{
		echo "<script>alert('RECORD SAVE!, OK TO CONTINUE')</script>"; 
        header("location: medical.php");
	}
	else 
	{
		echo "<p>Could not add the entry because:<br />" .mysqli_error($conn) . "</p>";
	}
	mysqli_close($conn); // Close the connection.		
?>
