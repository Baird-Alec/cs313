<?php
// Start the session
session_start();
// create an array
$my_array=array();
 
// put the array in a session variable
$_SESSION['items']=$my_array;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Browse Items Page</title>
</head>
<body>
<h1>Alec Baird's Store!</h1>

<h3>Clothing</h3>
T-Shirt: $25.00<button onclick="add('T-Shirt')">Add to Cart</button><br>
Jeans: $40.00<button onclick="add('Jeans')">Add to Cart</button><br>
Sweater: $55.00<button onclick="add('Sweater')">Add to Cart</button><br>
</body>
<script type="text/javascript">
	function add(item) {
		alert(item);
	}
	function AJAX() {
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    		if (this.readyState == 4 && this.status == 200) {
      			document.getElementById("demo").innerHTML =
      		this.responseText;
    		}
  		};
  	xhttp.open("GET", ""demo_get.asp?t=" + Math.random()", true);
  	xhttp.send();
	}
</script>
</html>