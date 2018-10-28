<?php

?>
<!DOCTYPE html>
<head>
<title>index</title>
</head>
<body>

<center>
<form id="cvform" method="post" action="insert.php" onsubmit="return valiform()">
<table border="4px">
<tr>
<td><p style="font:20px;"><b>CURRICULLAM VITAE OF<b></p></td>
<td><input type=""picture" id="picture" name="picture" placeholder="your Picture"></td>
</tr>
<tr><td><input type="text" id="name" name="name" placeholder="Your Name"></td></tr>
<tr><td><input type="number" id="number" name="number" placeholder="Your Number"></td></tr>
<tr><td><input type="email" id="email" name="email" placeholder="Your Email"></td></tr>

<tr><td><p style="font:16;"><b>Personal Info<b></p></td></tr>
<tr>
<td>Firstname</td>
<td><input type="text" id="fname" name="fname" placeholder="your firstname"></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type="text" id="lname" name="lname" placeholder="your lastname"></td>
</tr>
<tr>
<td>Father's Name</td>
<td><input type="text" id="fathername" name="fathername" placeholder="your father's name"></td>
</tr>
<tr>
<td>Mother's Name</td>
<td><input type="text" id="mothername" name="mothername" placeholder="your mother's name"></td>
</tr>
<tr>
<td>Present Address</td>
<td><textarea rows="4" cols="50" id="address" name="address">type your address</textarea></td>
</tr>
<tr>
<td>NID/Birth Certification Number</td>
<td><input type="text" id="nidbcn" name="nidbcn" placeholder="your NID/Birth Certification Number"></td>
</tr>
<tr>
<td>Gender</td>
<td><select name="gender" id="gender">
<option value="m">Male</option>
<option value="f">Female</option>
<option value="o">Others</option>
</select></td>
</tr>
<tr>
<td>Date Of Birth</td>
<td>
<input type="text" id="dob" name="dob" placeholder="your Date Of Birth"></td>
</tr>

<tr>
<td>Blood Group</td>
<td><input type="text" id="bg" name="bg" placeholder="your Blood Group"></td>
</tr>

<tr><td><p style="font:16;"><b>Qualification<b></p></td></tr>
<tr><td>name</td><td>institution name</td><td>group</td><td>g.p.a</td><td>Board</td><td>passing year</td></tr>
<tr><td>master's</td><td><input type="text" id="master" name="master" placeholder="master"></td>
<td><input type="text" id="mastergroup" name="mastergroup" placeholder="group"></td>
<td><input type="text" id="mastergpa" name="mastergpa" placeholder="gpa"></td>
<td><input type="text" id="masterboard" name="masterboard" placeholder="board"></td>
<td><input type="year" id="masteryear" name="masteryear" placeholder="year"></td></tr>
<tr><td>honour's</td><td><input type="text" id="honour" name="honour" placeholder="honour"></td>
<td><input type="text" id="honourgroup" name="honourgroup" placeholder="group"></td>
<td><input type="text" id="honourgpa" name="honourgpa" placeholder="gpa"></td>
<td><input type="text" id="honourboard" name="honourboard" placeholder="board"></td>
<td><input type="year" id="honouryear" name="honouryear" placeholder="year"></td></tr>
<tr><td>H.S.C</td><td><input type="text" id="hsc" name="hsc" placeholder="hsc"></td>
<td><input type="text" id="hscgroup" name="hscgroup" placeholder="group"></td>
<td><input type="text" id="hscgpa" name="hscgpa" placeholder="gpa"></td>
<td><input type="text" id="hscboard" name="hscboard" placeholder="board"></td>
<td><input type="year" id="hscyear" name="hscyear" placeholder="year"></td></tr>
<tr><td>S.S.C</td><td><input type="text" id="ssc" name="ssc" placeholder="S.S.C"></td>
<td><input type="text" id="sscgroup" name="sscgroup" placeholder="group"></td>
<td><input type="text" id="sscgpa" name="sscgpa" placeholder="gpa"></td>
<td><input type="text" id="sscboard" name="sscboard" placeholder="board"></td>
<td><input type="year" id="sscyear" name="sscyear" placeholder="year"></td></tr>

<tr>
<td>Signature</td>
<td><input type="text" id="signature" name="signature" placeholder="your Signature"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" id="submit" name="submit" value="add user"/></td>
</tr>
</table>
</form>
</center>

<script>
function valiform()
{
	var a1= document.forms["cvform"]["picture"].value;
	var a2= document.forms["cvform"]["name"].value;
	var b= document.forms["cvform"]["number"].value;
	var a4= document.forms["cvform"]["email"].value;
	var a5= document.forms["cvform"]["fname"].value;
	var a6= document.forms["cvform"]["lname"].value;
	var a7= document.forms["cvform"]["fathername"].value;
	var a8= document.forms["cvform"]["mothername"].value;
	var a9= document.forms["cvform"]["address"].value;
	var a10= document.forms["cvform"]["nidbcn"].value;
	var a11= document.forms["cvform"]["gender"].value;
	var a12= document.forms["cvform"]["dob"].value;
	var a13= document.forms["cvform"]["bg"].value;
	var a14= document.forms["cvform"]["mastergroup"].value;
	var a15= document.forms["cvform"]["mastergpa"].value;
	var a16= document.forms["cvform"]["masterboard"].value;
	var a17= document.forms["cvform"]["masteryear"].value;
	var a18= document.forms["cvform"]["honourgroup"].value;
	var a19= document.forms["cvform"]["honourgpa"].value;
	var a20= document.forms["cvform"]["honourboard"].value;
	var a21= document.forms["cvform"]["honouryear"].value;
	var a22= document.forms["cvform"]["hscgroup"].value;
	var a23= document.forms["cvform"]["hscgpa"].value;
	var a24= document.forms["cvform"]["hscboard"].value;
	var a25= document.forms["cvform"]["hscyear"].value;
	var a26= document.forms["cvform"]["sscgroup"].value;
	var a27= document.forms["cvform"]["sscgpa"].value;
	var a28= document.forms["cvform"]["sscboard"].value;
	var a29= document.forms["cvform"]["sscyear"].value;
	var a30= document.forms["cvform"]["signature"].value;	

	if(a1==null|| a1==""){
		window.alert("id must be filled");
		return false;
		}
		else if(a2==null|| a2==""){
			window.alert("name must be filled");
		return false;
			}
		else if(b==null|| b==""){
			window.alert("number must be filled");
		return false;
			}
		else if(a4==null|| a4==""){
			window.alert("email must be filled");
		return false;
			}
		else if(a5==null|| a5==""){
			window.alert("fname must be filled");
		return false;
			}
		else if(a6==null|| a6==""){
			window.alert("lname must be filled");
		return false;
			}
		else if(a7==null|| a7==""){
			window.alert("fathername must be filled");
		return false;
			}
		else if(a8==null|| a8==""){
			window.alert("mothername must be filled");
		return false;
			}
		else if(a9==null|| a9==""){
			window.alert("address must be filled");
		return false;
			}
		else if(a10==null|| a10==""){
			window.alert("nidbcn must be filled");
		return false;
			}
		else if(a11==null|| a11==""){
			window.alert("gender must be filled");
		return false;
			}
		else if(a12==null|| a12==""){
			window.alert("dob must be filled");
		return false;
			}
		else if(a13==null|| a13==""){
			window.alert("bg must be filled");
		return false;
			}
		else if(a14==null|| a14==""){
			window.alert("mastergroup must be filled");
		return false;
			}
		else if(a15==null|| a15==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a16==null|| a16==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a17==null|| a17==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a18==null|| a18==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a19==null|| a19==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a20==null|| a20==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a21==null|| a21==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a22==null|| a22==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a23==null|| a23==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a24==null|| a24==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a25==null|| a25==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a26==null|| a26==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a27==null|| a27==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a28==null|| a28==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a29==null|| a29==""){
			window.alert("password must be filled");
		return false;
			}
		else if(a30==null|| a30==""){
			window.alert("password must be filled");
		return false;
			}
	}
</script>

</body>
