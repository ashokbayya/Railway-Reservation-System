<?php


//create connection


if(isset($_POST["submit"]))
{ 
	if(!empty($_POST['Username']) && !empty($_POST['Password'])) 
	{ 
	    $user=$_POST['Username']; 
	    $pass=$_POST['Password']; 
	    $con=mysqli_connect('localhost','root','') or die(mysqli_error()); 
	    mysqli_select_db($con,'rrs') or die(mysqli_error($con)); 
            //$a = "SELECT * FROM register WHERE uname='".$user."' AND passwd='".$pass."'";
	    $query=mysqli_query($con,"SELECT * FROM register WHERE uname='".$user."' AND passwd='".$pass."'");
            //echo $a;
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
                echo "already registered";
            }
	    } 
            else 
            { 
                 $name=$_POST["Name"];
                $lname=$_POST["LastName"];
                $mob=$_POST["Mobile"];
                $email=$_POST["Email"];
                $addr=$_POST["Address"];
                $un=$_POST['Username'];
                $pass=$_POST['Password'];
                $date=$_POST['Date'];
              $sql = "INSERT INTO register(fname,lname,mobile,email,address,uname,passwd,dob)
                VALUES ('$name','$lname','$mob','$email','$addr','$un','$pass','$date')";
                if(mysqli_query($con, $sql))
                    {
                    //echo 'success';
                    echo "<script type='text/javascript'>alert('Registered successfully!')</script>";
                    header("Location:Login.php");
                }
                else
                {
                   echo 'failure';
                }  
	    }
	} 
        else 
	{ 
	    echo "All fields are required!"; 
	} 
} 

mysqli_close($con);
