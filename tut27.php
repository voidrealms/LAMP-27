<?php
	//set the cookie
	setcookie("user", "Bryan", time()+3600);
	setcookie("cat", "Shakes", time()+3600);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php
	echo $_COOKIE['user'] . "<br>";
	echo $_COOKIE['cat'] . "<br>";
?>

</body>
</html>
