 <?php
 echo '
 <div class="cd-main-header" style="height: auto; width: 100%; background-color: black;"> 
    <img src="img/R_HEADER.jpg" style = "width: 100%; height: 100px;">
        <nav class="navbar-default">
        <div class="container">
            <div class="navbar-header">
            <a href = "reports.php" class = "navbar-brand" >DASHBOARD</a></div>
            <div>
        <div class="navbar-header">
            <button type ="button" class="navbar-toggle" data-toggle="collapse" data-target = "#myMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="myMenu">
                <div>
            <ul class = "nav navbar-nav">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"> RECORDS <span class="caret"></span></span></a>
                <ul class="dropdown-menu">
                    <li><a href = "reports.php"><span class="glyphicon glyphicon-record"> REPORTS HOME</span></a></li>
                    <li><a href = "edu_rec.php"><span class="glyphicon glyphicon-record"> EDUCATION RECORDS</span></a></li>
                    
                    <li><a href = "med_rec.php"><span class="glyphicon glyphicon-record"> MEDICAL RECORDS</span></a></li>
                    
                    <li><a href = "per_rec.php"><span class="glyphicon glyphicon-record"> PERSONAL RECORDS</span></a></li>
                    <li><a href = "dep_criterials.php"><span class="glyphicon glyphicon-record"> QUALIFIED OFFICERS</span></a></li>
                    <li><a href = "dep_rec.php"><span class="glyphicon glyphicon-record"> DEPLOYMENT RECORDS</span></a></li>
                    <li><a href = "con_rec.php"><span class="glyphicon glyphicon-record"> Messages</span></a></li>
                    </ul></li></ul>
                    <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href = "login.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                    
                    </ul></div>
            </div></div></div></div></nav>

    </div> ';
?>