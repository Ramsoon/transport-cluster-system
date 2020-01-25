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
	<title>Education Form</title>
    <script>
    function conf(){
        confirm(" WARNING! Changes cannot be made after submission \n Click OK button if you are sure or Click on the CANCEL button to go through your information again")
    }
    </script>
    <style>
    
        fieldset.scheduler-border{
            border: 1px groove #ddd !important;
            padding: 0 1.4em 0 1.4em 0 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
                    box-shadow: 0px 0px 0px 0px #000;
            
        }
        legend.scheduler-border{
            border: none;
            width: auto;
            font-size: 1.2em;
            font-weight: bold;
            text-align: left;
            color: brown;
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
                <li class="active"><a href = "#">Register</a></li>
                
                <li><a href = "deployment.php"> Check Deployment Status</a></li>
                <li><a href = "contactus.php">Contact us</a></li>
                </ul>
            </div></div></div></nav>
 
    </div>
    <div class="container" style = "width: auto; height: auto; margin: 30px; padding:10px; border: none; float: center" align = "center">
         <img src="img/register.jpg" style="width: auto; height: 310px; margin-bottom: 10px;">
      <div class="clearfix">
              <a class = "btn btn-success"  data-toggle = "collapse" href = "#form"> &rarr; Register me for Deployment </a>
            
          </div>
              </div>

            
    <div class="container" style="background-color: white; padding-top: 10px; width: 100%; margin-top: 0px;">
		
       

		<div class="panel panel-default" style="padding-bottom: 40px;">
            <div id="form" class="panel-collapse collapse">
                <h3 title="fill in the form to register" style="color: purple; text-align: center; font-weight: bold;"> Nigerian Navy Deployment  Form</h3>
		<p style="color: navy; text-align: center;text-decoration: underline;"> Endeavour to fill in the form carefully</p>
<form role = "form" action="" method="post" style="margin: 20px;">
    <!-- personal form-->
    <fieldset class="scheduler-border">
        <legend class="scheduler-border"> Personal Information</legend>
	<div class="row" style="padding: 30px 30px 30px 30px;">
		<div class="col-md-4">
		<div class="md-form">
			<label for="PID">Personal ID </label>
            <input type="text" class="form-control" name="pid" required data-validation-required-message="this field can not be empty.">
            </div></div>
		<div class="col-md-4">
	       <div class="md-form">
			<label for="fname">First Name </label>
            <input type="text" class="form-control" name="Fname">
            </div></div>
        <div class="col-md-4">
	       <div class="md-form">
			<label for="Lname">Last Name </label>
            <input type="text" class="form-control" name="Lname">
            </div>
        
        </div></div>
	
            
<div class="row" style="padding: 20px 20px 20px 20px;">
<div class="col-md-4">
	<div class="md-form">
		<label for="on">Other Name </label>
		<input type="text" name="oname" placeholder="e.g Okino" class="form-control">
	</div>
	</div>
    <div class="md-form" style="padding-left: 30px;">
            	<div class="col-md-4">
            	<label>Male </label> <input type="radio" name="sex" value = "Male">
            	<label>Female </label> <input type="radio" name="sex" value="Female">
        </div></div>
	   <div class="col-md-4">
	<div class="md-form">
		<label for="title">State of Origin </label>
		<select class="form-control" name="state">
        <option>
			...Select...
		</option>
		<option>
			Abia
		</option>
		<option>
			Adamawa
		</option>
		<option>
			Akwa-Ibom
		</option>
	</select>
     </div></div>
    </div>
	<div class="row" style="padding: 20px 20px 20px 20px;">
        <div class="col-md-4">
	<div class="md-form">
    <label for="title">Local Government </label>
		<select class="form-control" name="lga">
        <option>
			...Select...
		</option>
		<option>
			Mr.
		</option>
		<option>
			Miss
		</option>
		<option>
			Mrs.
		</option>
	</select>
        </div></div>
        <div class="col-md-4">
	       <div class="md-form">
                  <label for="mer">Date of Birth </label>
		          <input type="text" name="dob" placeholder="dd/mm/yyyy" class="form-control">
	</div>
	</div>
        
	<div class="col-md-4">
	<div class="md-form">
		<label for="homeaddress">Home address: </label>
        <textarea type="text" name="homeadd" class="md-textarea form-control" rows="5" cols="25"></textarea>
	</div>
	</div>
</div>
    <div class="row" style="padding: 20px 20px 20px 20px;">
        <div class="col-md-4">
	<div class="md-form">
		<label for="phonenum">Phone Number </label>
        <input type="text" name="phonenum" class="md-textarea form-control" rows="5" cols="25">
	</div>
	</div>

		<div class="col-md-4">
	<div class="md-form">
		<label for="mer">Next of Kin </label>
		<input type="text" name="nok" placeholder="e.g Oyiza Muhammed" class="form-control">
	</div>
	</div>
    <div class="col-md-4">
	<div class="md-form">
		<label for="kinddress">Address of Kin </label>
        <textarea type="text" name="kinadd" class="md-textarea form-control" rows="5" cols="25"></textarea>
        </div></div></div>
   
    </fieldset>
    
    <!-- education form-->
	<fieldset class="scheduler-border" id="edu">
        <legend class="scheduler-border">Educational Background</legend>
	<div class="row" style="padding: 30px 30px 30px 30px;">
		
		<div class="col-md-3">
	<label for="title">Heighest Qualification </label>
		<select class="form-control" name="hq">
		<option>
            Primary School
		</option>
		<option>
			SSCE
		</option>
		<option>
			National Diploma
		</option>
        <option>
			Higher National Diploma
		</option>
        <option>
			Bachelor Degree
		</option>
	</select>	</div>

	
		<div class="col-md-3">
	<div class="md-form">
		<label for="cof">Course Offered </label>
		<input type="text" name="cof" placeholder="e.g computer science" class="form-control">
	</div>
	</div>
     

<div class="col-md-3">
	<div class="md-form">
		<label for="we">Work Experience </label>
		<input type="text" name="we" placeholder="your experience" class="form-control">
	</div>
	</div>

	<div class="col-md-3">
	<div class="md-form">
		<label for="homeaddress">Responsibility </label>
		<input type="text" name="r" placeholder="e.g administrator" class="form-control">
	</div>
	</div>
</div>
        
</fieldset>
<!-- medical info-->

    <fieldset class="scheduler-border" id="med">
    <legend class="scheduler-border">Medical Info</legend>
    <div class="row" style="padding: 30px 30px 30px 30px;">
		
		<div class="col-md-3">
	       <div class="md-form">
			<label for="hm">Height (in Metres) </label>
            <input type="text" class="form-control" name="hm">
            </div></div>
        <div class="col-md-3">
	       <div class="md-form">
			<label for="wkg">Weight (in Kg) </label>
            <input type="text" class="form-control" name="wkg">
            </div>
        
        </div>
	
<div class="col-md-3">
	<div class="md-form">
		<label for="bg">Blood Group </label>
		<input type="text" name="bg" placeholder="e.g A+" class="form-control">
	</div>
	</div>
	
		<div class="col-md-3">
	<div class="md-form">
		<label for="cof">Genotype </label>
		<input type="text" name="gt" placeholder="e.g 0+" class="form-control">
	</div>
        </div></div>
	
	<div class="row" style="padding: 20px 20px 20px 20px;">
        <div class="col-md-4">
	<div class="md-form">
		<label for="hopi">History  of past Illness</label>
		<input type="text" name="hopi" placeholder="e.g gonorrhea" class="form-control">
	</div>
	</div>
	
		<div class="col-md-4">
	<div class="md-form">
		<label for="mer">Medical Exam Result </label>
		<select class="form-control" name="mer">
		<option>
            ...Select..
		</option>
		<option>
			Fit
		</option>
        <option>
			Not Fit
		</option>
	</select>
	</div>
	</div>

	<div class="col-md-4">
	<div class="md-form">
		<label for="dr">Doctor's Remark </label>
		<input type="text" name="r" placeholder="e.g satisfactory" class="form-control">
	</div>
	</div>
</div>

    </fieldset>
    <div style="margin: 20px;" align = "right">
    <button class="btn btn-warning" type="submit" onclick="conf();"> Submit </button>
    </div>
            </form></div>
        </div></div>
<footer align = "center" style=" width: 100%; height: auto; background-color: black; color: azure; float: center; ">
    <p style = "margin-bottom: 20px;">
        POWERED BY MUHAMMED KABIRU OKINO</p>
    <p style = "margin-bottom: 20px;">&copy; 2018 Alright Reserve
    </p>
          
</footer>
    
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>