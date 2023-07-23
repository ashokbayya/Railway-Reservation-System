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
        <link rel="stylesheet" href="../styles/Home.css"/>
        <title>RRS</title> 
    </head>
    <body>
        
          
        
         <div class="fixed-header">
         <div class="ashok"><b>Railway Reservation System</b></div>
         <div class="container">
            <nav>
                <a href="../index.php">Home</a>
                <a href="addtrain.php">Add Train</a>
                <a href="addsch.php">Add Schedule</a>
                <a href="logout.php">Logout  <?php
                echo "  ".$_SESSION['sess_user'];
                //echo '<a href=""><button>Logout</button></a>';
        ?>
                </a>
                
            </nav>
        </div>
    </div>
        <div class="welcome" align="center">
    <?php
        echo "welcome  ".$_SESSION['sess_user'];
        ?>
        </div>
    <div class="fixed-footer">
        <div class="foot"><b>designed and developed by 141071@rgukt.ac.in</b></div>        
    </div>
    
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

