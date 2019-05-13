<?php
// Start the session
session_start();
$_SESSION["top"] = "found";
$_SESSION["bottom"] = "found";
$_SESSION["coat"] = "found";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Browse Items Page</title>
</head>
<body>
<h1>Alec Baird's Store!</h1>

<h3>Clothing</h3>
T-Shirt: $25.00<a href="items.php?set=1">Add to Cart</a><br>
Jeans: $40.00<a href="items.php?set=2">Add to Cart</a><br>
Sweater: $55.00<a href="items.php?set=3">Add to Cart</a><br>
<a href="cart.php">Click here to go to your cart!</a>
</body>
</html>