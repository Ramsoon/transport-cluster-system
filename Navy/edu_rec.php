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
<body>
   <?php
   include ('dashboard.php');
   ?>
            
    <div class="container" style="padding-top: 30px; padding-bottom: 50px;" align = "center">
  
        <h2 style="font-size: 20px; font-family: sans-serif;">Education Information</h2>
    <table class="table table-striped" style="font-size: 12px;">
    <thead>
        <tr>
            <th>Personal ID</th>
            <th>Heighst Qualification</th>
            <th>Course Offered</th>
            <th>Work Experience</th>
            <th>Responsibility</th>
            <th>Date/Time Registered</th>
            <th>Action</th>
            
        </tr>
        

        </thead>
        <tbody>
            <?php

            $db =  mysqli_connect("localhost","root","","navy");
            $rahman = mysqli_query($db, "select * from personal");
           // $del = $_REQUEST["pid"];
            $count = mysqli_num_rows($rahman);
         while($sa = mysqli_fetch_array($rahman)){
             
             ?>

            <tr>
            <td><?php echo $sa['pid']; ?></td>
            <td><?php echo $sa['HeighestQaul']; ?></td>
            <td><?php echo $sa['CourseOff']; ?></td>
            <td><?php echo $sa['WorkExp']; ?></td>
            <td><?php echo $sa['Responsibility']; ?></td>
            <td><?php echo $sa['reg_date']; ?></td>
            <?php //echo "<td><form name= 'form1' action = 'delete.php' ><input type='hidden' name='id' value='$del'><input name='Delete' type='Submit' value='Delete' /></form></td></tr>";?>
         <?php echo'   <td><div align="left"><a  href="edu_rec.php?pid='.$sa["pid"].'">Edit</a>   ';?>
         <?php echo'   <a  href="delete.php?pid='.$sa["pid"].'">Delete</a></div></td>   ';?>
        
            
            
        </tr>
            
            <?php
         }
         echo "<p align = 'left'>Showing: $count </p>";
            ?>
        
            
        
        </tbody>
        </table>

        
            
                         
                                
     <?php
                                
        
       if(isset($_GET["pid"]))
        {     
                  $eid = $_REQUEST["pid"]; 
            if (isset($_POST['update_rec'])){
                              $hq  = $_POST['hq'];
                              $cof  = $_POST['cof'];  
                              $we  = $_POST['we'];    
                              $r = $_POST['r'];
      
      mysqli_query($db,"UPDATE personal SET CourseOff='$cof', Responsibility='$r', WorkExp='$we', HeighestQaul='$hq' where pid = '$eid' ");
      
                     ?>

                     
                          <script>
                                   alert('<?php echo mysqli_affected_rows($db); ?> Record Updated');
                                   window.location='edu_rec.php';
                          </script>

                     <?php

                exit;
            }
         
            $SADIQ = mysqli_query($db, "SELECT * FROM personal WHERE pid = '$eid'        ");
            $row =  mysqli_fetch_array($SADIQ);
            
         ?>
         
               <form role="form" method="post" id="reused_form" >
               <div class="row" style="padding: 30px 30px 30px 30px;">
        
        
    
        <div class="col-md-6">
    <label for="title">Heighest Qualification </label>
       <input type="text" name="hq" value="<?php echo $row['HeighestQaul'] ?>"  id = "hq" class="form-control">     </div>

    
        <div class="col-md-6">
    <div class="md-form">
        <label for="cof">Course Offered </label>
        <input type="text" name="cof" value="<?php echo $row['CourseOff'] ?>"  id = "cof" class="form-control">
    </div>                   
    </div>
    </div>
<div class="row" style="padding: 30px 30px 30px 30px;">
<div class="col-md-6">
    <div class="md-form">
        <label for="we">Work Experience </label>
        <input type="text" name="we" id = "we" value="<?php echo $row['WorkExp'] ?>" class="form-control">
    </div>                         
    </div>

    <div class="col-md-6">
    <div class="md-form">
        <label for="homeaddress">Responsibility </label>
        <input type="text" name="r" id = "r" value="<?php echo $row['Responsibility'] ?>" class="form-control">
    </div>                
    </div>
</div>
<input type="hidden" name = "army" id="army"/>
   

         <button type="submit" name = "update_rec" id = "insert" class="btn btn-lg btn-success btn-block">Update It! &rarr;</button>
   
                            </form>
                       
         <?php
        }
        ?>
               <div id="add_data_Modal" class="modal fade" >
                <div class="modal-dialog">
            
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">
                                Update Record
                            </h4>
                        </div>
                        <div class="modal-body">
  
	
	     <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                        </div>
                    </div>
                </div>
            </div>
    
<script>
$(document).on('click', '.edit_data', function(){
    var army = $(this).attr("pid");
    $.ajax({
        url: "fetch.php",
        method: "POST",
        data:{army:army},
        dataType:"json",
        success:function(data){
            $('#hq').val(data.hq);
            $('#cof').val(data.cof);
            $('#we').val(data.we);
            $('#r').val(data.r);
            $('#army').val(data.pid);
           // $('#insert').val("Update"); 
            $('#add_data_Modal').modal('show');
                        

        }
    });
    
});      
    
</script>
        
</div>   <?php include 'foot.php'; ?>
    
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>