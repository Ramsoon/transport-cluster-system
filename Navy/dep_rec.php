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
	<title>Deployment Records</title>
    
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
    <?php
   include ('dashboard.php');
   ?>
            
    <div class="container" style="padding-top: 30px; padding-bottom: 50px;" align = "center">
  
        <h3 style="font-size: 20px; font-family: sans-serif;">Deployed Officers</h3>
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
            <th>D.State</th>
            <th>Station</th>
            <th>Date Deployed</th>
            <th>Action</th>
            <!--<th>Redeploy</th>-->
            
        </tr>
        

        </thead>
        <tbody>
            <?php
            $db =  mysqli_connect("localhost","root","","navy");
            $rahman = mysqli_query($db, "select * from deploiy");
            $count = mysqli_num_rows($rahman);
         while($sa = mysqli_fetch_array($rahman)){
             
             ?>
            <tr>
            <td><?php echo $sa['pid']; ?></td>
            <td><?php echo $sa['fullName']; ?></td>
            <td><?php echo $sa['sex']; ?></td>
            <td><?php echo $sa['state']; ?></td>
            <td><?php echo $sa['HeighestQaul']; ?></td>
            <td><?php echo $sa['WorkExp']; ?></td>
            <td><?php echo $sa['hopi']; ?></td>
            <td><?php echo $sa['mresult']; ?></td>
            <td><?php echo $sa['dremark']; ?></td>
            <td><?php echo $sa['deploystate']; ?></td>
            <td><?php echo $sa['seaport']; ?></td>
            <td><?php echo $sa['deploy_date']; ?></td>
            <?php echo'   <td><div align="center"><a  href="dep_rec.php?pid='.$sa["pid"].'">Redeploy</a></div></td>   ';?>
            
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
                              $hq  = $_POST['sod'];
                              $cof  = $_POST['sp'];  
                              //$we  = $_POST['we'];    
                              //$r = $_POST['r'];
      
      mysqli_query($db,"UPDATE deploiy SET deploystate='$hq', seaport='$cof' where pid = '$eid' ");
                     ?>
                          <script>
                                   alert('<?php echo mysqli_affected_rows($db) ?> Officer Redeployed');
                                   window.location='dep_rec.php';
                          </script>
                     <?php
                exit;
            }
         
            $SADIQ = mysqli_query($db, "SELECT * FROM deploiy WHERE pid = '$eid'        ");
            $row =  mysqli_fetch_array($SADIQ);
            
         ?>
         
               <form role="form" method="post" id="reused_form" >
               
        
        
    
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
        <label for="mer">Sea Port/Station </label>
        <select class="form-control" id="slct2" name="sp">
            <option value="">
            ...Select...
        </option>
    </select>
    </div>
    </div>
    </div>   
<input type="hidden" name = "army" id="army"/>
   

         <button type="submit" name = "update_rec" id = "insert" class="btn btn-lg btn-success btn-block">Update It! &rarr;</button>
   
                            </form>
                       
         <?php
        }
        ?>
</div>
<?php include('foot.php');?>
    
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>