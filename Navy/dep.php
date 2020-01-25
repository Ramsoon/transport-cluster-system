<?php 
	$conn = mysqli_connect("localhost", "root", "","navy");
	
	// Define the query:
	$pid=$_POST['pid'];
	$fname=$_POST['full'];//SADIQ'
	$sex=$_POST['sex'];
	$state=$_POST['state'];
    $hq=$_POST['hq'];
	$we=$_POST['we'];
	$hopi=$_POST['hopi'];
    $mer=$_POST['mer'];
    $dr=$_POST['dr'];
    $sod=$_POST['sod'];
    $sp=$_POST['sp'];
    
   
	
	$pid = mysqli_real_escape_string($conn,$pid);
	$fname= mysqli_real_escape_string($conn,$fname);
$sex= mysqli_real_escape_string($conn,$sex);
$state= mysqli_real_escape_string($conn,$state);
$hq= mysqli_real_escape_string($conn,$hq);
$we= mysqli_real_escape_string($conn,$we);
$hopi= mysqli_real_escape_string($conn,$hopi);
$mer= mysqli_real_escape_string($conn,$mer);
$dr= mysqli_real_escape_string($conn,$dr);
$sod= mysqli_real_escape_string($conn,$sod);
$sp= mysqli_real_escape_string($conn,$sp);




	$query = "INSERT INTO deploiy (pid, fullName, sex, state, HeighestQaul, WorkExp, hopi, mresult, dremark, deploystate, seaport, deploy_date)
	VALUES('$pid', '$fname', '$sex', '$state', '$hq', '$we','$hopi','$mer', '$dr','$sod','$sp', CURRENT_TIMESTAMP)";
				//echo $query;
	// Execute the query:
	if (@mysqli_query($conn, $query)) 
	{
		echo "<script>alert('DEPLOY SUCCESSFUL')
		window.location.href = 'dep_criterials.php';
		</script>";
	}
	else 
	{
		echo "<script>alert('Could NOT be deployed because, the Officer has already been deployed')
			window.location.href = 'dep_criterials.php';</script>"; 
	}
	mysqli_close($conn); // Close the connection.		
?>
