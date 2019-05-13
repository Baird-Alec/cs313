<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart Page</title>
</head>
<body>
	You are buying:<br>
<?php
	if (isset($_SESSION['top']))
	{
		echo nl2br("One shirt\r\n");
	}
	if (isset($_SESSION['bottom']))
	{
		echo nl2br("One pair of jeans\r\n");
	}
	if (isset($_SESSION['coat']))
	{
		echo nl2br("One sweater\r\n");
	}
?>
<a href="items.php">Return to Browsing</a><br>
<a href="checkout.php">Checkout</a>
</body>
</html>