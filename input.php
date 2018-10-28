
<?php

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<input type="text" placeholder="search from here" id="search" name="search" onKeyUp="return search()"/>
<table id="table" border="2px">
<tr><td>std id</td><td>name</td><td>dept</td></tr>
<tr><td>123</td><td>abc</td><td>CSE</td></tr>
<tr><td>1234</td><td>cde</td><td>EEE</td></tr>

</table>
</body>
</html>
<script>

function search(){
	var input,tr,td,table,filter,i;
	input= document.getElementById("search");
	filter = input.valuetoUpperCase();
	table = document.getElementById("table");
	
	for(i=0;i<tr.length;i++){
		td = tr[i].getElementByTagName("td") [0];
		td = tr[i].getElementByTagName("td") [0];
		td = tr[i].getElementByTagName("td") [0];

		if(td){
			if(td.inner,HTML.toUpperCase().indexOf(filter)>-1){
				tr[i].style.display="";
				}
			else{
				tr[i].style.display="none";
				}
			}
		}
	}

</script>