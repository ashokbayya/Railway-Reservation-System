<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
      <h2 class="form_title">Get your password</h2>
      
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form  method="POST">
       </div>
      <div id="username_form">
          <h3 class="birthday_title">UserName</h3>
          <input type="text" name="Username" value="" required  pattern="[a-zA-Z]{5,}" placeholder="username" class="input_username">
      </div>
      <div id="password_form">
          <h4 class="birthday_title">Date of birth</h4>
        <input type="date" name="DOB" required pattern="/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/" value=""  placeholder="enter date of birth" class="input_password">
      </div>
       <div id="sign_user">
           <input type="submit" class="submit" name="submit" value="Get password"/>
      </div>
        <!--<a href="Login.php"><p style="text-align: center">Go to Login page now</p></a>-->
     </form>
    </div>
    <!--form ends-->
  </div>
</div>
<!--container ends-->
<div style="text-align: center; font-size:25px" >
 <?php 
	if(isset($_POST["submit"]))
	{ 
	if(!empty($_POST['Username']) && !empty($_POST['DOB'])) 
	{ 
	    $user=$_POST['Username']; 
	    $pass=$_POST['DOB']; 
	    $con=mysqli_connect('localhost','root','') or die(mysqli_error()); 
	    mysqli_select_db($con,'rrs') or die(mysqli_error($con)); 
	    $query=mysqli_query($con,"SELECT * from register WHERE uname='".$user."' AND dob='".$pass."'");
	    $numrows=mysqli_num_rows($query); 
	    if($numrows!=0) 
	    { 
	    while($row=mysqli_fetch_assoc($query)) 
	    { 
	    $dbusername=$row['uname']; 
	    $dbpassword=$row['passwd'];
            echo "Hi...,Your Password is  ".$dbpassword;
            echo ".please go to home and try to login now";
	    } 
	    } else 
            { 
	    echo "Invalid details"; 
	    }
	} else 
	{ 
	    echo "All fields are required!"; 
	} 
	}
?> 
</div>
    <div class="fixed-footer">
        <div class="foot"><b>designed and developed by 141071@rgukt.ac.in</b></div>        
    </div>
</body>
</html>