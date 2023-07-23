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
        <link rel="stylesheet" href="styles/Home.css"/>
        <title>RRS</title> 
    </head>
    <body>
         <div class="fixed-header">
         <div class="ashok"><b>Railway Reservation System</b></div>
         <div class="container">
            <nav>
       <?php
       if(isset($_SESSION['sess_user'])) 
        {
           $user=$_SESSION['sess_user'];
           if($user=="admin")
           {
            //echo "<script type='text/javascript'>myFunction();</script>";
           echo '<a href="src/admin.php">Admin Page</a><a href="#">Check Availability</a><a href="#">Check Schedule</a>';
            echo "".$_SESSION['sess_user'];
            echo '<a href="src/logout.php"><button>Logout</button></a>';
           }
           else
           {
               echo '<a href="src/user.php">User Page</a><a href="#">Check Availability</a><a href="#">Check Schedule</a>';
            echo "".$_SESSION['sess_user'];
            echo '<a href="src/logout.php"><button>Logout</button></a>';
           }
        } 
        else 
        {
        echo '<a href="src/Registration.php">Register</a><a href="src/Login.php">Login</a>';
        }
       ?>
               
                <!--<a href="#">Check Availability</a>
                <a href="#">Check Schedule</a>-->
            </nav>
        </div>
    </div>
        <div class="logo" align="center">
            <img src="assets/image.png"  style="width: 30%; height: 20% ;border-radius: 50%">
        </div>
        <div class="content">
            <p>Railway Reservation System is a website to help the passengers to have a simple reservation of train tickets</p>
        </div>
       
        <!-- <script>
            function myFunction() 
            {
                document.getElementById("myLink").disabled = true;
            }
        </script>-->
    <div class="fixed-footer">
        <div class="foot"><b>designed and developed by 141071@rgukt.ac.in</b></div>        
    </div>
    
    </body>
</html>
