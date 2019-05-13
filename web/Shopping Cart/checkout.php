<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Checkout Page</title>
</head>
<body>
	<form action="confirmation.php">
		Street: <input type="text" name="Street"><br>
		City: <input type="text" name="City"><br>
		State: <input type="text" name="State"><br>
		Zip: <input type="text" name="Zip"><br>
		<input type="submit" name="">
	</form>
	<a href="cart.php">Return to Cart</a><br>
	<a href="confirmation.php">Checkout</a>
</body>
</html>