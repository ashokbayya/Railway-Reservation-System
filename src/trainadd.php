<?php
$servername= "localhost";
$userrname="root";
$password="";
$dbname="rrs";

//create connection
$conn= mysqli_connect($servername,$userrname,$password,$dbname);
//check connection
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
$tnum=$_POST["TrainNumber"];
//echo $tnum;
$tname=$_POST["TrainName"];
//echo $tname;
$tsource=$_POST["Source"];
//echo $tsource;
$tdest=$_POST["Destination"];
//echo $tdest;
$tinter=$_POST["IntermediateStations"];
//echo $tinter;
$tnature=$_POST["TrainNature"];
//echo $tnature;
$day1=$_POST["tracker0"];
//echo $day1;
$day2=$_POST["tracker1"];
//echo $day2;
$day3=$_POST["weekly3"];
//echo $day3;
if($tnature=="weekly")
{
$sql = "INSERT INTO train(tnum,tname,source,destination,intermediate,trainnature,weekly3)
VALUES ('$tnum','$tname','$tsource','$tdest','$tinter','$tnature','$day3')";
}
else if($tnature=="daily")
{
$sql = "INSERT INTO train(tnum,tname,source,destination,intermediate,trainnature)
VALUES ('$tnum','$tname','$tsource','$tdest','$tinter','$tnature')"; 
}
else
{
    //echo 'useless';
$sql = "INSERT INTO train(tnum,tname,source,destination,intermediate,trainnature,weekly1,weekly2)
VALUES ('$tnum','$tname','$tsource','$tdest','$tinter','$tnature','$day1','$day2')";
}
if(mysqli_query($conn, $sql))
{
    //echo 'success';
    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';
    header("Location:addsch.php");
    exit;
    
}
else
{
    echo 'failure';
}
mysqli_close($conn);
?>