<?php
session_start();
$u=$_POST["uname"];
$pass=$_POST["pass"];
$con=mysqli_connect("localhost","root","","id3156387_seekdb");
$rows=mysqli_query($con,"select * from clogin where USERNAME='$u' AND PASSWORD='$pass'");
$c=mysqli_num_rows($rows);
if($c==0)
	{
	$Message=urlencode("Entered details are incorrect");
	header('Location: index.html?Error='.$Message);
	}
else
	{ 	header('Location: company.html');
	echo "Log In successful";
	}
mysqli_close($con);
?>


<html>
<title>Company LogIn</title>
</html>
