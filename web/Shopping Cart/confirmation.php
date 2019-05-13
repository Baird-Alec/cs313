<?php
// Start the session
session_start();
$_SESSION['street'] = 0;
$_SESSION['state'] = 0;
$_SESSION['city'] = 0;
$_SESSION['zip'] = 0;
$_SESSION['street'] = $_GET['Street'];
$_SESSION['state'] = $_GET['State'];
$_SESSION['city'] = $_GET['City'];
$_SESSION['zip'] = $_GET['Zip'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
</head>
<body>
<?php
	if (isset($_SESSION['street']))
	{
		echo nl2br("Street: " . $_SESSION['street'] . "\r\n");
	}
	if (isset($_SESSION['city']))
	{
		echo nl2br("City: " . $_SESSION['city'] . "\r\n");
	}
	if (isset($_SESSION['state']))
	{
		echo nl2br("State: " . $_SESSION['state'] . "\r\n");
	}
	if (isset($_SESSION['zip']))
	{
		echo nl2br("Zip Code: " . $_SESSION['zip'] . "\r\n");
	}
?>
</body>
</html>
