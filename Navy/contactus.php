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
	<title>CONTACT PAGE</title>
    
<title>contact us form</title>

  <style type="text/css">
    body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("img/sadiq.jpg");

  /* Control the height of the image */
  background: url(img/sadiq.jpg) no-repeat; height: 750px;
    background-size: 100% 100%;
    border: 2px solid black;
    
    width: 100%;
    height: 550px;
    
    margin-top: 10px;
  }

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
  input[type=text], input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
  </style>

</head>
<body>
    <div class="cd-main-header" style="height: auto; width: 100%; background-color: black;"> 
    <img src="img/header1.jpg" style = "width: 100%; height: 100px;">
        

    </div>
<div class="bg-img">
  <form action="cont.php" method="post">
    <div class="container">
        <p> Click <a href="index.php"> here </a> to return to home page </p>
      <h3>Contact Form</h3>

      <label for="email"><b>ID</b></label>
      <input type="text" placeholder="Enter ID Number" name="email" required>

      <label for="psw"><b>Subject</b></label>
      <input type="text" placeholder="Enter Subject" name="sub" required>

       <label for="psw"><b>Your message</b></label><i class="fa fa-pencil prefix"></i>
      <textarea class="md textarea form-control" rows="5" name="msg"></textarea>

      <div class="button" style="padding-top: 20px;">
      <button type="submit" class="btn">SEND</button>
      </div>
    </div>
  </form>
</div>


<?php include ('foot.php');?>    
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>