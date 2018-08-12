<?php
$n=$_POST["cname"];
$u=$_POST["cuname"];
$pass=$_POST["cpass"];
$email=$_POST["cemail"];
$con=mysqli_connect("localhost","root","","id3156387_seekdb");
$rows=mysqli_query($con,"insert into clogin values('$n','$u','$email','$pass')");
header('Location: index.php');
mysqli_close($con);
?>

<html>
<title>Company Sign Up</title>
<html>
