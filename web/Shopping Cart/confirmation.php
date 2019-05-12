<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
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
</body>
</html>