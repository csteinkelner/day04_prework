<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  
session_start();

$_SESSION['username'] = "what";
// $variable = $_SESSION['username'];

if (isset($_SESSION['username'])) {
	print "session is running";
} 

$mysqli = new mysqli('localhost','root','', 'day04');

if (!$mysqli){
	       print "<h1>Unable to Connect to MySQL</h1>";
	} else{
		print "<br>sucessfull connection <br>";
}

// mysqli_close($conn);
?>

</body>
</html>