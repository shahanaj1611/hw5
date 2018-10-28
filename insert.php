<?php
include("../control/config.php");

$name=$_POST['name'];
$number=$_POST['number'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fathername=$_POST['fathername'];
$mothername=$_POST['mothername'];
$address=$_POST['address'];
$nidbcn=$_POST['nidbcn'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$bg=$_POST['bg'];
$signature=$_POST['signature'];

$sql="INSERT INTO personalinfo(number,name,firstname,lastname,fathersname,mothersname,address,nidbcn,gender,dob,email,bloodgroup,signature)
VALUES('$number','$name','$fname','$lname','$fathername','$mothername','$address','$nidbcn','$gender','$dob','$email','$bg','$signature')";

$result=mysqli_query($myconn,$sql);
if($result===TRUE){
	echo ("user information added successfull");
	}
else{
	echo ("user information added not successfull");
	}

header("Location:form.php");
?>