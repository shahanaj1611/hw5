<?php

include('config.php');
$personalinfo="CREATE TABLE personalinfo(
id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
picture IMAGE(1) NOT NULL,
number INT(11) NOT NULL,
name VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
fathersname VARCHAR(30) NOT NULL,
mothersname VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
nidbcn INT(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
dob VARCHAR(30) NOT NULL,
email VARCHAR(50),
bloodgroup VARCHAR(30) NOT NULL,
signature VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
$result = mysqli_query($myconn,$personalinfo);
if($result===TRUE)
{
	echo "personal info table created";
}
else
{
	echo "personal info table not created";
}


?>