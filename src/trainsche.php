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

$tnumber=$_POST["TrainNumber"];
echo $tnumber;
$s1name=$_POST["station1"];
$s1arrival=$_POST["arrival1"];
$s1departure=$_POST["departure1"];
$s1dist=$_POST["dist1"];
$s1fare=$_POST["fare1"];
$s2name=$_POST["station2"];
$s2arrival=$_POST["arrival2"];
$s2departure=$_POST["departure2"];
$s2dist=$_POST["dist2"];
$s2fare=$_POST["fare2"];
$s3name=$_POST["station3"];
$s3arrival=$_POST["arrival3"];
$s3departure=$_POST["departure3"];
$s3dist=$_POST["dist3"];
$s3fare=$_POST["fare3"];
$s4name=$_POST["station4"];
$s4arrival=$_POST["arrival4"];
$s4departure=$_POST["departure4"];
$s4dist=$_POST["dist4"];
$s4fare=$_POST["fare4"];
$s5name=$_POST["station5"];
$s5arrival=$_POST["arrival5"];
$s5departure=$_POST["departure5"];
$s5dist=$_POST["dist5"];
$s5fare=$_POST["fare5"];

$sql = "INSERT INTO interstations(tnum,s1name,s1arrival,s1departure,s1dastance,s1fare,s2name,s2arrival,s2departure,s2dastance,s2fare,s3name,s3arrival,s3departure,s3dastance,s3fare,s4name,s4arrival,s4departure,s4dastance,s4fare,s5name,s5arrival,s5departure,s5dastance,s5fare)
VALUES ('$tnumber','$s1name','$s1arrival','$s1departure','$s1dist','$s1fare','$s2name','$s2arrival','$s2departure','$s2dist','$s2fare','$s3name','$s3arrival','$s3departure','$s3dist','$s3fare','$s4name','$s4arrival','$s4departure','$s4dist','$s4fare','$s5name','$s5arrival','$s5departure','$s5dist','$s5fare')";
if(mysqli_query($conn, $sql))
{
    echo 'success';
    //header("Location:addsch.php");
}
else
{
    echo 'failure';
}
mysqli_close($conn);
