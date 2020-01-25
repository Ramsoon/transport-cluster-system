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
	<title>Deployment Criterials</title>
    
<style type="text/css">
    a:visited{
       

    }
</style>
<script> 
var text1 = "deployed";
var text2 = "deploy";
var dep;
if(dep == 1){
    write.document(text1);
}
else{
    write.document(text2);
}
</script>
</head>
<body>
    <?php
   include ('dashboard.php');
   ?>

            
    <div class="container" style="padding-top: 30px; padding-bottom: 50px;" align = "center">
  
        <h3 style="font-size: 20px; font-family: sans-serif;">Records of officers to be deployed</h3>
    <table class="table table-striped" style="font-size: 12px;">
    <thead>
        <tr>
            <th>Personal ID</th>
            <th>Full name</th>
            <th>Gender</th>
            <th>State</th>
            <th>H.Qualification</th>
            <th>Experience</th>
            <th>Past Illness</th>
            <th>Medical Result</th>
            <th>Doctor's Remark</th>
            <th>registration Time</th>
            <th>Action</th>
            
            
        </tr>
        

        </thead>
        <tbody>
            <?php
            $dep = "Deploy";
            $db =  mysqli_connect("localhost","root","","navy");
            $rahman = mysqli_query($db, "SELECT * FROM personal WHERE mresult = 'Fit'");
            $sadiq = mysqli_query($db, "SELECT * FROM deploiy");
        while($sa = mysqli_fetch_array($rahman)){
             $dep = "Deploy";
             $dep2 = "Deployed";
            $sad = mysqli_fetch_array($sadiq);
            if($sa['pid'] == $sad['pid']) {
                $dep = "<b style 'color:green'>Deployed</b>"; 
            }
             ?>
            <tr>
            
            <td><?php echo $sa['pid']; ?></td>
            <td><?php echo $sa['fname'].' '.$sa['lname'].' '.$sa['oname']; ?></td>
            <td><?php echo $sa['sex']; ?></td>
            <td><?php echo $sa['state']; ?></td>
            <td><?php echo $sa['HeighestQaul']; ?></td>
            <td><?php echo $sa['WorkExp']; ?></td>
            <td><?php echo $sa['hopi']; ?></td>
            <td><?php echo $sa['mresult']; ?></td>
            <td><?php echo $sa['dremark']; ?></td>
            <td><?php echo $sa['reg_date']; ?></td>
            
            <td><a href = "deploy_admin.php?depl=<?php echo $sa["pid"] ?>"><?php echo "$dep"; ?></a></td>
            
            
        </tr>
            
           <?php
        }
            
            ?>
        <?php
            


            ?>
        
        </tbody>
        </table>
</div>
<?php
include 'foot.php';
?>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>