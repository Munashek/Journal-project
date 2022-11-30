﻿<?php
require('dbconn.php');
?>

<?php 
if ($_SESSION['email']) {
    ?>


<html>

    <head>
        
        <title>Journal System Project</title>
		
        
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">LMS </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                   
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            
        </div>
       
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                
                                </li>
                                
                               
                                
                                <li><a href="addtask.php"><i class="menu-icon icon-edit"></i>Add task </a></li>
                                
                               
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        
                    </div>
                  
                    
                    <div class="span9">
                        <center>
                            <div class="card" style="width: 50%;"> 
                                <img class="card-img-top" src="images/profile2.png" alt="Card image cap">
                                <div class="card-body">

                                <?php
                                $email = $_SESSION['email'];
                                $sql="select * from user where email='$email'";
                                $result=$conn->query($sql);
                                $row=$result->fetch_assoc();

                                $name=$row['name'];
                                $email=$row['email'];
                                
                                ?>    
                                    <i>
                                    <h1 class="card-title"><center><?php echo $name ?></center></h1>
                                    <br>
                                    <p><b>Email: </b><?php echo $email ?></p>
                                    <br>
                                    <p><b>Name: </b><?php echo $name ?></p>
                                    </b>
                                </i>

                                </div>
                            </div>
                        <br>
                        <a href="edit_user_details.php" class="btn btn-primary">Edit Details</a>
                        </center>               
                    </div>
                    
                    
                </div>
            </div>
           
        </div>

        
        
        
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>


<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>