<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <a href="Registration.php">Register</a>
            </nav>
        </div>
    </div>
<!-- The HTML login form -->
   <div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="containerr">
  <div id="container_body">
    <div>
      <h2 class="form_title">Login</h2>
      
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form  method="POST">
       </div>
      <div id="username_form">
          <h3 class="birthday_title">UserName</h3>
          <input type="text" name="Username" value="" required  pattern="[a-zA-Z]{5,}" placeholder="Enter your Username" class="input_username">
      </div>
      <div id="password_form">
          <h4 class="birthday_title">Password</h4>
        <input type="password" name="Password" required pattern="(?=.*[a-zA-Z]).{5,}" value=""  placeholder="Enter your Password" class="input_password">
      </div>
       <div id="sign_user">
           <input type="submit" class="submit" name="submit" value="Login"/>
      </div>
        <a href="forgotpass.php"><p style="text-align: center">forgot password</p></a>
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
<!--container ends-->
 <?php 
	if(isset($_POST["submit"]))
	{ 
	if(!empty($_POST['Username']) && !empty($_POST['Password'])) 
	{ 
	    $user=$_POST['Username']; 
	    $pass=$_POST['Password']; 
	    $con=mysqli_connect('localhost','root','','rrs') or die(mysqli_error()); 
	    //mysqli_select_db($con,'rrs') or die(mysqli_error($con)); 
	    $query=mysqli_query($con,"SELECT * FROM register WHERE uname='".$user."' AND passwd='".$pass."'");
	    $numrows=mysqli_num_rows($query); 
	    if($numrows!=0) 
	    { 
	    while($row=mysqli_fetch_assoc($query)) 
	    { 
	    $dbusername=$row['uname']; 
	    $dbpassword=$row['passwd']; 
	    } 

	    if($user == $dbusername && $pass == $dbpassword) 
	    { 
                if($user=="admin" && $pass=="admin")
                {
                   session_start(); 
                   $_SESSION['sess_user']=$user; 
                   header("Location:admin.php");  
                }
                else 
                {
                    session_start(); 
                    $_SESSION['sess_user']=$user; 
                    /* Redirect browser */ 
                    header("Location:user.php"); 
                }
            }
	    } 
            else 
            { 
	    echo "Invalid username or password!"; 
	    }
	} 
        else 
	{ 
	    echo "All fields are required!"; 
	} 
	} 
?> 
    <div class="fixed-footer">
        <div class="foot"><b>designed and developed by 141071@rgukt.ac.in</b></div>        
    </div>
    
    </body>
</html>
