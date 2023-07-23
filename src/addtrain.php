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
        <script>
    </script>
        </div>
    </head>
    <body>
        
          
        
         <div class="fixed-header">
         <div class="ashok"><b>Railway Reservation System</b></div>
         <div class="container">
            <nav>
                <a href="../index.php">Home</a>
                <a href="addsch.php">Add Schedule</a>
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
      <h2 class="form_title">Add Train</h2>
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
          
          <form name="form" method="post">
           <input type="text" name="TrainNumber" value="" required pattern="[0-9]{5,}" title="please enter minimum of 5 numbers" placeholder="Train Number"  class="input_name" >
        <input type="text" name="TrainName" value="" required pattern="[a-zA-Z\s]+" title="please enter minimum of 5 letters" placeholder="Train Name" class="input_name" >
      </div>
      <div id="mobile_form">
          <input type="text" name="Source" value="" required pattern="[a-zA-Z\s]{3,}"  placeholder="Enter Source" class="input_mobile">
      </div>
      <div id="Re_email_form">
        <input type="text" name="Destination" value="" required pattern="[a-zA-Z]{3,}" placeholder="Enter Destination" class="input_Re_email">
      </div>
      
      <div id="Re_email_form">
        <input type="text" name="IntermediateStations" value="" required pattern="[0-5]{1,}" placeholder="Enter no of intermediate Stations" class="input_Re_email" id="nochapter" />
        <div id="Re_email_form">
        <h3 class="birthday_title">Train Nature</h3>
        <input type="radio" onclick="javascript:yesnoCheck();" name="TrainNature" value="biweekly" id="yesCheck">BiWeekly</input>
        <div id="ifYes" style="display:none">
        <div>
        <select name="tracker0" class="update-select">
                <option>--Select--</option>
		<option value="sunday">Sunday</option>
		<option value="monday">Monday</option>
		<option value="tuesday">Tuesday</option>
		<option value="wednesday">Wednesday</option>
		<option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
		<option value="saturday">Saturday</option>
	</select>
        </div>
        <div>
	<select name="tracker1" class="update-select">
		<option>--Select--</option>
		<option value="sunday">Sunday</option>
		<option value="monday">Monday</option>
		<option value="tuesday">Tuesday</option>
		<option value="wednesday">Wednesday</option>
		<option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
		<option value="saturday">Saturday</option>
	</select>
        </div>
        </div>
<input type="radio" onclick="javascript:yesnoCheck();" name="TrainNature" value="weekly" id="noCheck">Weekly</input>
    <div id="ifNo" style="display:none">
        <div>
            <select name="weekly3">
		<option>--Select--</option>
		<option>Sunday</option>
		<option>Monday</option>
		<option>Tuesday</option>
		<option>Wednesday</option>
		<option>Thursday</option>
                <option>Friday</option>
		<option>Saturday</option>
	</select> 
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
   function yesnoCheck() 
  {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';
    if (document.getElementById('noCheck').checked) {
        document.getElementById('ifNo').style.display = 'block';
    }
    else document.getElementById('ifNo').style.display = 'none';
    if (document.getElementById('nooCheck').checked) {
        document.getElementById('ifNoo').style.display = 'block';
    }
    else document.getElementById('ifNoo').style.display = 'none';
   }
$(document).ready(function() {
    $(document).on('change', '.update-select', function(e) {
        $('option').show();

        var selectedOptionsGlobal = [];

        $.each($('.update-select'), function(key, select) {
            var selectedOptionValue = $(select).val();

            if (selectedOptionValue !== "") {
                selectedOptionsGlobal.push(selectedOptionValue);
            }
        });

        for (var i = 0; i < selectedOptionsGlobal.length; i++) {
            $('option[value="'+selectedOptionsGlobal[i]+'"]').hide();
        }
    });
});
</script>
      <input type="radio" onclick="javascript:yesnoCheck();" name="TrainNature" value="daily" id="nooCheck">Daily</input>
      <div id="ifNoo" style="display:none">
       
    </div>
 </div>
 </div>
       <div id="sign_user">
           <input type="submit" class="submit" name="submit" value="submit" formaction="trainadd.php">
      </div>
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



