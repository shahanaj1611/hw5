<?php

include("../control/config.php")

$sql="SELECT * FROM personalinfo";
$result=mysqli_query($myconn,$sql);

echo'<table border="2px">
<tr><td>name</td><td>number</td><td>firstname</td><td>lastname</td><td>fathersname </td><td>mothersname</td><td>address</td><td>nidbcn</td>
<td>gender</td><td>dob</td><td>email</td><td>bloodgroup</td><td>signature</td></tr>';

while($row=mysqli_fetch_assoc($result)){
$name= $row['name'];
$number= $row['number'];
$fname= $row['firstname'];
$lname= $row['lastname'];
$fathername= $row['fathername'];
$mothername= $row['mothersname'];
$address= $row['address'];
$nidbcn= $row['nidbcn'];
$gender = $row['gender'];
$dob = $row['dob'];
$email = $row['email'];
$bg = $row['bloodgroup'];
$signature = $row['signature'];

echo'
<tr><td>'.$name.'</td><td>'.$number.'</td><td>'.$fname.'</td><td>'.$lname.'</td><td>'.$fathername.'</td><td>'.$mothername.'</td><td>'.$address.'</td><td>'.$nidbcn.'</td>
<td>'.$gender.'</td><td>'.$dob.'</td><td>'.$email.'</td><td>'.$bg.'</td><td>'.$signature.'</td></tr>';
}
echo'</table>';

?>