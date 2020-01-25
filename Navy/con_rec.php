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
	<title>Navy Deployment System</title>
    

</head>
<?php
   include ('dashboard.php');
   ?>            
    <div class="container" style="padding-top: 30px; padding-bottom: 50px;" align = "center">
  
        <h3>Contact Records </h3>
    <table class="table table-striped" style="font-size: 12px;">
    <thead>
        <tr>
            <th>S/N</th>
            <th>ID</th>
            <th>Subject</th>
            <th>Message Dropped</th>
            <th>Date/Time Registered</th>
            
            
        </tr>
        

        </thead>
        <tbody>
            <?php
            $db =  mysqli_connect("localhost","root","","navy");
            $rahman = mysqli_query($db, "select * from contactus");
         while($sa = mysqli_fetch_array($rahman)){
             
             ?>
            <tr>
            <td><?php echo $sa['id']; ?></td>
            <td><?php echo $sa['email']; ?></td>
            <td><?php echo $sa['subject']; ?></td>
            <td><?php echo $sa['message']; ?></td>
            <td><?php echo $sa['date_time']; ?></td>
            
            
            
            
        </tr>
            
            <?php
         }
            ?>
        
            
        
        </tbody>
        </table>
</div>
<footer align = "center" style=" width: auto; ">
    <div class="sub-footer" style = " width: auto;" align = "center">
    <div class="sub-footer2" style = "height: auto; background-color: black; color: azure; width: 80%;" align = "center">
    <p style = "margin-bottom: 20px;">
        POWERED BY MUHAMMED KABIRU OKINO</p>
    <p style = "margin-bottom: 20px;">&copy; 2018 Alright Reserve
    </p>
    </div> 
    </div>
     
</footer>
    
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>