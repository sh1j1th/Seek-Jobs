<?php
$n=$_POST["fname"];
$u=$_POST["uname"];
$pass=$_POST["pass"];
$email=$_POST["email"];
$con=mysqli_connect("localhost","root","","id3156387_seekdb");
$rows=mysqli_query($con,"insert into alogin values('$n','$u','$email','$pass')");
$row1=mysqli_query($con,"insert into applicant (user) values ('$u')");
header('Location: index.php');
mysqli_close($con);

?>


<html>
<title>Applicant Sign Up</title>
<html>
