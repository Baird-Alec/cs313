<?php
// Start the session
session_start();
$_SESSION['top'] = $_GET['T-Shirt'];
$_SESSION['bottom'] = $_GET['Jeans'];
$_SESSION['coat'] = $_GET['Sweater'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart Page</title>
</head>
<body>
<?php
	if (isset($_SESSION['top']))
	{
		echo "shirt found";
	}
	if (isset($_SESSION['bottom']))
	{
		echo "jeans found";
	}
	if (isset($_SESSION['coat']))
	{
		echo "sweater found";
	}
?>
<a href="items.php">Return to Browsing</a><br>
<a href="checkout.php">Checkout</a>
</body>
</html>