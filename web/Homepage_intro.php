<html>
<head>
	<title>CS 313 Homepage</title>
	<link rel="stylesheet" type="text/css" href="Homepage.css">
</head>
<body>
	<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="me.jpg" alt="Picture of Alec">
	<p>Hello! My name is Alec Baird, and I am a 24 year old senior majoring
   in Software Engineering. I have been married to my wife for over 2 years,
   and we are looking to move to a new area at the end of the summer. I currently
   am employed as a Software Developer for the Idaho National Laboratory in Idaho Falls,
   where I work as part of the Information Management team.
	</p>
	<h3>Links to CS 313 Assignments</h3>
	<a href="Homepage_links.php">CS 313</a>
	<h3>Links to CIT 261 Assignments</h3>
	<a href="CIT261/home.html">CIT 261</a><br>
	<?php
		require 'Homepage.php';
	?>
</body>
<script type="text/javascript">
	function bigImg(x) {
  x.style.height = "585px";
  x.style.width = "330px";
}

function normalImg(x) {
  x.style.height = "390px";
  x.style.width = "220px";
}
</script>
</html>