


<!DOCTYPE html>


<head>
<script type="text/javascript">
    function emp(){
        var a = document.getElementById('idno').value;
        if (a == "") {
            alert("Please enter an Officer ID");

        }
    }
</script>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="gillstyle.css">
        <link rel="stylesheet" type="text/css" href="fontawesome-webfont.eot">
	<title>CHECK DEPLOYMENT STATUS</title>
    <style type="text/css">
	

		.transbox {
    margin: 30px;
    background-color: azure;
    border: 1px solid black;
    opacity: 1.0;
    filter: alpha(opacity=20); /* For IE8 and earlier */
    margin-top: 50px;
    width: 30%;
    height: auto;
    padding-top: 40px;
    float: center;
}

.transbox form {
    margin: 2%;
    font-weight: bold;
    color: #000000;
        }
        .footer{
            width: 50%;
            float: center;
        }
	</style>

</head>
<body>
    <div class="cd-main-header" style="height: auto; width: 100%; background-color: black;"> 
    <img src="img/header1.jpg" style = "width: 100%; height: 100px;">
    
        <nav class="navbar-default">
        <div class="container">
        <div class="navbar-header">
            <button type ="button" class="navbar-toggle" data-toggle="collapse" data-target = "#myMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="myMenu">
            <ul class = "nav navbar-nav">
                <li><a href = "index.php">Home</a></li>
                
                <li><a href = "reg.php">Register</a></li>
                
                <li class="active"><a href = "deployment.php"> Check Deployment Status</a></li>
                
                <li><a href = "contactus.php">Contact us</a></li>
                </ul>
            </div></div></div></nav>

    </div>
<div class="backgroud_img" align="center">
	<H1 style ="color: black; text-transform: capitalize; text-shadow: 5px 5px 5px #FF0000; text-align: center; padding-top: 30px;"> CHECK YOUR DEPLOYMENT STATUS</H1>
	<div class="transbox">
		<form role = "form" action="letter.php" method = "post">
			<p class="h4 text-center mb-4" style="color: blue;">Enter ID Number in the space provided</p>
			<div class="md-form" style="text-align: left; padding-left: 10px; padding-right: 10px; padding-top: 10px">
        <label for="Email"> Enter Your ID Number</label>
        <input type="text" id="idno" name="pid" class="form-control">
    </div>


    <div class="text-center mt-4" style="padding-top: 50px;" >
        <button class="btn btn-warning"  onclick="emp()" type="submit" maxlength="4" >CHECK STATUS</button>
    </div>			
		</form>
		
	</div>
</div>
            
    
<?php include 'foot.php';?>
    
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>