<!DOCTYPE html>


<head>

	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="gillstyle.css">
        <link rel="stylesheet" type="text/css" href="fontawesome-webfont.eot">
	<title>DEPLOY OFFICER</title>
    
<script type="text/javascript">
	function populate(s1,s2){
		var s1 = document.getElementById(s1);
		var s2 = document.getElementById(s2);
		s2.innerHTML = "";
		if(s1.value == "Abuja"){
            var optionArray = ["Head Office, Abuja|Head Office, Abuja"];
        }else if(s1.value == "Bayelsa"){
            var optionArray = ["Yenagoa Head Quaters|Yenagoa Head Quaters"];
        }else if(s1.value == "Cross River"){
            var optionArray = ["Calabar Port|Calabar Port", "Calabar Head Quaters|Calabar Head Quaters"];
        }else if(s1.value == "Delta"){
            var optionArray = ["Delta Port|Delta Port"];
        }else if(s1.value == "Lagos"){
            
            var optionArray = ["Apapa Head Quaters|Apapa Head Quaters", "Lagos Port Complex|Lagos Port Complext"];
        }else if(s1.value == "Rivers"){
            var optionArray = ["Onne Port in Rivers|Onne Port in Rivers", "Rivers Port Complex|Rivers Port Complex"];
        }
		for(var option in optionArray){
			var pair = optionArray[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			s2.options.add(newOption);
		}
	}
</script>
</head>
<body>
    <div class="cd-main-header" style="height: auto; width: auto; background-color: black;"> 
    <img src="img/R_HEADER.jpg" style = "width: 100%; height: 100px;">
    
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
                <li><a href = "dep_criterials.php">Report</a></li>
                <li class="active"><a href = "deploy_admin.php">Deploy Navy Officer</a></li>
                </ul>
            </div></div></div></nav>

    </div>
    <?php
    $db =  mysqli_connect("localhost","root","","navy");
    if(isset($_REQUEST["depl"]))
    {
        $depl = $_REQUEST["depl"];
        $query = mysqli_query($db, "SELECT * FROM personal WHERE pid = '$depl'");
        $sa = mysqli_fetch_array($query, MYSQLI_ASSOC);
    }
    
    ?>

            
    <div class="container" style="background-color: lightgrey; padding-top: 10px; width: 60%; margin-top: 0px;">
		<h3 title="deploy an officer" style="color: purple; text-align: center; font-weight: bold;"> Nigerian Navy Deployment Form</h3>
		<p style="color: navy; text-align: center;text-decoration: underline;"> Ensure to deploy according to the information provided</p> 
		<div class="panel panel-default" style="padding-bottom: 40px;">
<form role = "form" action="dep.php" method="post">
	
	<div class="row" style="padding: 30px 30px 30px 30px;">
		<div class="col-md-3">
		<div class="md-form">
			<label for="PID">Personal ID </label>
            <input type="text" class="form-control" name="pid" value="<?php echo $sa['pid']; ?>" style="font-weight: none; color: black;  border: none;">
            </div></div>
		<div class="col-md-6">
	       <div class="md-form">
			<label for="hm">Full Name </label>
            <input type="text" class="form-control" name="full" value="<?php echo $sa['fname'].' '.$sa['lname'].' '.$sa['oname']; ?>" style=" color: black;  border: none;">
            </div></div>
        <div class="col-md-3">
	       <div class="md-form">
			<label for="wkg">Gender </label>
            <input type="text" class="form-control" name="sex" value="<?php echo $sa["sex"]?>" style=" color: black;  border: none;">
            </div>
        
        </div></div>
	
            
<div class="row" style="padding: 20px 20px 20px 20px;">
<div class="col-md-4">
	<div class="md-form">
		<label for="bg">State of Origin </label>
		<input type="text" name="state"  class="form-control" value="<?php echo $sa["state"]?>" style=" color: black; border: none;">
	</div>
	</div>
	
		<div class="col-md-4">
	<div class="md-form">
		<label for="cof">Heighest Qualification </label>
		<input type="text" name="hq"  class="form-control" value="<?php echo $sa['HeighestQaul'];  ?>" style=" color: black;  border: none;">
	</div>
	</div>
    <div class="col-md-4">
	<div class="md-form">
		<label for="hopi">Work Experience</label>
		<input type="text" name="we" class="form-control" value="<?php echo $sa['WorkExp']; ?>" style=" color: black;  border: none;">
	</div>
	</div>
	</div>
	<div class="row" style="padding: 20px 20px 20px 20px;">
        <div class="col-md-4">
	<div class="md-form">
		<label for="hopi">History of Past Illness</label>
		<input type="text" name="hopi" class="form-control" value="<?php echo $sa['hopi']; ?>" style=" color: black;  border: none;">
	</div>
	</div>
        <div class="col-md-4">
	<div class="md-form">
		<label for="dr">Medical Result </label>
		<input type="text" name="mer" class="form-control" value="<?php echo $sa['mresult']; ?>" style=" color: black;  border: none;">
	</div>
	</div>

	<div class="col-md-4">
	<div class="md-form">
		<label for="dr">Doctor's Remark </label>
		<input type="text" name="dr" class="form-control" value="<?php echo $sa['dremark']; ?>" style=" color: black; border: none;">
	</div>
	</div>
    	
</div>

    <div class="row" style="padding: 20px 20px 20px 20px;">
    <div class="col-md-5">
	<div class="md-form">
		<label for="mer">State of Deployment </label>
		<select class="form-control" id = "slct1" name="sod" onchange="populate(this.id,'slct2')">
		<option value="">
            ...Select...
		</option>
        <option value="Abuja">
			Abuja
		</option>
		<option value="Bayelsa">
            Bayelsa
        </option>
		<option value="Cross River">
			Cross River
		</option>
        <option value="Delta">
            Delta
		</option>
        <option value="Lagos">
            Lagos
		</option>
        <option value="Rivers">
            Rivers
		</option>
	</select>
	</div>
	</div>
        
    <div class="col-md-7">
	<div class="md-form">
		<label for="mer">Sea Port </label>
		<select class="form-control" id="slct2" name="sp">
			<option value="">
            ...Select...
		</option>
	</select>
	</div>
	</div>
    </div>   
<div class="text-center mt-4" style="padding-top: 20px;" >
    
    <button class="btn btn-warning" type="submit">DEPLOY A NAVAL OFFICER</button>
    </div>
</form>
        </div></div>
<?php
include 'foot.php';
?>
    
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>