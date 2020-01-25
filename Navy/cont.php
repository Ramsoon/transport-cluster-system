<?php 
	$conn = mysqli_connect("localhost", "root", "","navy");
	
	// Define the query:
	$pid=$_POST['email'];
	$hm=$_POST['sub'];//SADIQ'
	$wkg=$_POST['msg'];
	

	//filter Strings
$pid = mysqli_real_escape_string($conn,$pid);
$hm= mysqli_real_escape_string($conn,$hm);
$wkg= mysqli_real_escape_string($conn,$wkg);




	$query = "INSERT INTO contactus (id, email, subject, message, date_time)
	VALUES(NULL, '$pid', '$hm', '$wkg', CURRENT_TIMESTAMP)";
				//echo $query;
	// Execute the query:
	if (@mysqli_query($conn, $query)) 
	{
		echo "<script>alert('Message Sent!')
		window.location.href = 'index.php';
		</script> "; 
	}
	else 
	{
		echo "<p>Message Could not send because:<br />" .mysqli_error($conn) . "</p>";
	}
	mysqli_close($conn); // Close the connection.		
?>
