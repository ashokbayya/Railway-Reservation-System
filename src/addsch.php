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
        <div id="Re_email_form">
        
        </div>
    </head>
    <body>
        
          
        
         <div class="fixed-header">
         <div class="ashok"><b>Railway Reservation System</b></div>
         <div class="container">
            <nav>
                <a href="../index.php">Home</a>
                <a href="addtrain.php">Add Train</a>
                <a href="logout.php">Logout  <?php
        echo "  ".$_SESSION['sess_user'];
        ?>
                    
                </a>
                
            </nav>
        </div>
    </div>
     <div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="containerr">
  <div id="container_body">
    <div>
      <h2 class="form_title">Add Schedule</h2>
    </div>
     
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
          
          <form name="myform" method="post" >
           <div id="Re_email_form">
        <input type="text" name="TrainNumber" value="<?php if (isset($_POST['TrainNumber'])) echo $_POST['TrainNumber']; ?>"   required pattern="[0-9]{5,}" title="please enter minimum of 5 numbers" placeholder="Train Number"  class="input_Re_email" >
      </div>
       <div style="text-align: center">
            <input style = "display = 'block'" id="submit" type="submit"  name="submit" value="add details"  onclick="this.style.display = 'none'">
           
       </div>
        
      <?php 
	if(isset($_POST["submit"]))
	{ 
	if(!empty($_POST['TrainNumber'])) 
	{ 
	    $user=$_POST['TrainNumber']; 
	    //$pass=$_POST['Password']; 
	    $con=mysqli_connect('localhost','root','') or die(mysqli_error()); 
	    mysqli_select_db($con,'rrs') or die(mysqli_error($con)); 
	    $query=mysqli_query($con,"SELECT * FROM train WHERE tnum='".$user."'");
	    $numrows=mysqli_num_rows($query); 
	    if($numrows!=0) 
	    { 
	    while($row=mysqli_fetch_assoc($query)) 
	    { 
	    $dbusername=$row['intermediate'];
            
	    //$dbpassword=$row['passwd']; 
	    } 
              $i = 1;
              $a=1;
              $d=1;
// Initiate the while loop
        while ($i <=$dbusername)
            {
            error_reporting(0);
     // Now print the text box to the screen
                echo "<br>Station Name<br><input style=\"padding:10px 0 10px 0px;\" type=\"textbox\" name=\"station".$i."\" required pattern=\"[a-zA-Z\s]+\" placeholder=\"Station".$i." Name\" /><br>Arrival Time<br><input style=\"padding:12px 0 10px 0px;\" id=\"arrival".$i."\" type=\"time\" name=\"arrival".$i."\" required pattern=\"/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/\" /><br>Departure Time<br><input style=\"padding:12px 0 10px 0px;\" type=\"time\" id=\"departure".$i."\" name=\"departure".$i."\" required pattern=\"/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/\"/><br>Distance<br><input style=\"padding:10px 0 10px 0px;\" type=\"textbox\" name=\"dist".$i."\" placeholder=\"station".$i." distance\" /><br>Fare<br><input style=\"padding:10px 0 10px 0px;\" type=\"textbox\" name=\"fare".$i."\" placeholder=\"station".$i." fare\" /><br><div><hr/></div>";
                //$a="<script>document.getElementByID('InsertRecordDate').value;</script>";
                //echo '<script type="text/javascript">alert("'.$a.'");</script>';
                
     // Make sure we add 1 to the count variable, otherwise we would have an infinate loop.
            $i++;
            }
            if($dbusername==1)
                 {
                     $var = $_POST['arrival1'];
                     $s=$_POST['departure1'];
                     if($var>$s)
                     {
                       echo '<script type=\'text/javascript\'>'; 
                        echo 'alert("arrival time should be less than departure time");'; 
                        echo '</script>';  
                     }
                     else if($var<$s)
                    {
                  echo '<script type=\'text/javascript\'>'; 
                echo 'alert("Train successfully sheduled");'; 
                echo '</script>';
                   }
                 }
              
            else
                {
             while($a<$dbusername) 
             {
                 
                 $x=$_POST['arrival'.$a.''];
                 $d1=$_POST["dist".$a.""];
                 $y=$_POST['departure'.$a.''];
                 if($x>$y)
                {
                    echo '<script type=\'text/javascript\'>'; 
                    echo 'alert("arrival time should be less than departure time");'; 
                    echo '</script>';
                }
                $a++;
                $z=$_POST['arrival'.$a.''];
                $d2=$_POST["dist".$a.""];
                if($y>$z)
                {
                    echo '<script type=\'text/javascript\'>'; 
                    echo 'alert("departure  time of prevoius station should be less than arrival time of next station");'; 
                    echo '</script>';
                }
                else if(($x<$y)&&($y<$z))
                {
                    if($d1>$d2)
                    {
                    echo '<script type=\'text/javascript\'>'; 
                    echo 'alert("distance of prevoius station should be less than next station");'; 
                    echo '</script>';
                    }
                    else 
                    {
                    echo '<script type=\'text/javascript\'>'; 
                    echo 'document.myform.action="trainshe.php"';
                    
                    echo 'alert("Train successfully sheduled");'; 
                    /*echo "<script> 
       document.myform.action='trainshe.php'; 
      </script>";*/
                    
                    echo '</script>'; 
                    }
             }
             }
            }
            /*$var = $_POST['arrival1'];
            $s=$_POST['departure1'];
            $d1=$_POST['dist1'];
            $var1 = $_POST['arrival2'];
            $s1=$_POST['departure2'];
            $d2=$_POST['dist2'];
            $var2 = $_POST['arrival3'];
            $s2=$_POST['departure3'];
            $d3=$_POST['dist3'];
            $var3 = $_POST['arrival4'];
            $s3=$_POST['departure4'];
            $d4=$_POST['dist4'];
            $var4 = $_POST['arrival5'];
            $s4=$_POST['departure5'];
            $d5=$_POST['dist5'];
            if($var>$s || $var1>$s1 || $var2>$s2 || $var3>$s3 || $var4>$s4)
            {
            echo '<script type=\'text/javascript\'>'; 
            echo 'alert("arrival time should be less than departure time");'; 
            echo '</script>';
            }
            else if($s>$var1 || $s1>($var2!=0) || $s2>($var3!=0) || $s3>($var4!=0))
            {
            echo '<script type=\'text/javascript\'>'; 
            echo 'alert("departure  time of prevoius station should be less than arrival time of next station");'; 
            echo '</script>';  
            }
            else if(($var<$s&&$s<$var1) || ($var1<$s1&&$s1<$var2) || ($var2<$s2&&$s2<$var3) || ($var3<$s3&&$s3<$var4) || ($var4<$s4)) 
            {
                 if($d1>$d2 || $d2>$d3 || $d3>$d4 || $d4>$d5)
                 {
                    echo '<script type=\'text/javascript\'>'; 
                    echo 'alert("distance of prevoius station should be less than next station");'; 
                    echo '</script>';
                 }
                 else
                 {
                echo '<script type=\'text/javascript\'>'; 
                echo 'alert("Train successfully sheduled");'; 
                echo '</script>';   
                  }
             }*/
	    } 
            else 
            { 
	    echo "Invalid Train Number"; 
	    }
	} 
        else 
	{ 
	    echo "All fields are required!"; 
	} 
	} 
?>   
        
      </div>
      
       <div id="sign_user"><input type="submit" class="submit" name="submit" value="submit"></div>
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
<!--container ends-->
    <div class="fixed-footer">
        <div class="foot"><b>designed and developed by 141071@rgukt.ac.in</b></div>        
    </div>
    
    </body>
</html>



