<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <a href="Login.php">Login</a>
            </nav>
        </div>
    </div>
<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="containerr">
  <div id="container_body">
    <div>
      <h2 class="form_title">Registration</h2>
 
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
          
          <form name="form" method="post">
           <input type="text" name="Name" value="" required pattern="[a-zA-Z]{5,}" title="please enter first name" placeholder="First Name"  class="input_name" >
        <input type="text" name="LastName" value="" required pattern="[a-zA-Z]{5,}" title="please enter last name" placeholder="Last Name" class="input_name" >
      </div>
      <div id="mobile_form">
          <input type="text" name="Mobile" value="" required pattern="[6789][0-9]{9}"  placeholder="Your mobile" class="input_mobile">
      </div>
      <div id="Re_email_form">
        <input type="text" name="Email" value="" required pattern="[a-zA-Z0-9]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z]{2,}"placeholder="enter Email" class="input_Re_email">
      </div>
      
      
      <div id="address_form">
          <textarea rows=3 cols=3 name="Address" value="" required pattern="[a-zA-Z0-9]{3,}" placeholder="Location or Address" class="input_address"></textarea>
      </div>
      <div id="username_form">
          <input type="text" name="Username" value="" required  pattern="[a-zA-Z]{5,}" placeholder="username" class="input_username">
      </div>
      <div id="password_form">
        <input type="password" name="Password" required pattern="(?=.*[a-zA-Z]).{5,}" value=""  placeholder="Password" class="input_password">
      </div>
      <!--birthday details start-->
      <div id="dob_form">
          <h3 class="birthday_title">Birthday</h3>
          <input type="date" name="Date" value="" value="" id="InsertRecordDate" onsubmit="pasDateValidation();" required pattern="/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/" placeholder="enter dob" class="input_dob">
      </div>
       <script>
function pastDateValidation()
{
    var d=document.getElementById("InsertRecordDate").value;
        if(new Date(d) > new Date())
    {
        alert("Select a date which is before now");
        document.getElementById("InsertRecordDate").value="";
    }

}
document.getElementById('InsertRecordDate').onchange = pastDateValidation;

</script>
       <div id="sign_user">
           <input type="submit" class="submit" name="submit" value="submit"formaction="Success.php">
      </div>
      <a href="login.php"><p style="text-align: center;font-size: 25px"><button>Already have an account..Login</button></p></a>
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
