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
                
            </nav>
        </div>
    </div>
<div id="emptyDiv"></div>
<div id="description"></div>
<!--container start-->
<div id="containerr">
  <div id="container_body">
    
    <!--Form  start-->
    <?php
                session_start();
                if(isset($_SESSION['sess_user']))
                {
                unset($_SESSION['sess_user']);
                session_destroy();
                }
                echo '<h1>You have been successfully logged out</h1>';
             
                
?>
   <a href="index.php"><p style="text-align: center;font-size: 25px">Click here to go to home</p></a>
    <!--form ends-->
  </div>
</div>
<!--container ends-->
<div class="fixed-footer">
  <div class="foot"><b>designed and developed by 141071@rgukt.ac.in</b></div>        
</div>
    
</body>
</html>

