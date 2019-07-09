<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Home.css"/>
        <title>RRS</title> 
    </head>
    <body>
        
          
        
         <div class="fixed-header">
         <div class="ashok"><b>Railway Reservation System</b></div>
         <div class="container">
            <nav>
                <a href="index.php">Home</a>
                <a href="Login.php">PNR Status</a>
                <a href="#">Book Ticket</a>
                <a href="#">Cancel Ticket</a>
                <!--<a href="index.php">Logout<?php
                //echo "  ".$_SESSION['sess_user'];
            ?>-->
                </a>
                
            </nav>
        </div>
    </div>
        <div class="welcome" align="center">
    <?php
        //echo "welcome  ".$_SESSION['sess_user'];
        if(!isset($_SESSION['sess_user']))
        {
           header("location: index.php");
        }
        $name=$_SESSION['sess_user'];
    ?>
            <h1>Hello <?php echo $name;?></h1>
            <h3><a href="logout.php"><button>Click here to log out</button></a></h3>
        </div>
    <div class="fixed-footer">
        <div class="foot"><b>designed and developed by 141071@rgukt.ac.in</b></div>        
    </div>
    
    </body>
</html>