<?php
session_start();
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$zip=$_POST['zip'];
$linkedin=$_POST['linkedin'];
$seeking=$_POST['job'];
$exp=$_POST['exp'];
$fow=$_POST['fow'];
$resume=$_POST['resume'];
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","id3156387_seekdb");
$rows1=mysqli_query($con,"select * from alogin where USERNAME='$uid' and PASSWORD='$pass'");
$c=mysqli_num_rows($rows1);
if($c==0)
{
$_SESSION["errormsg"]='Authentication Failed. Try again';
header("Location: adetail.html?id=".$uid);
flash('Authentication Failed');
}
else
{
$rows=mysqli_query($con,"update applicant set fname='$fn', lname='$ln',email='$email',phone='$phone',city='$city',state='$state',country='$country',zip='$zip',linkedin='$linkedin',job='$seeking',exp='$exp',fow='$fow',resume='$resume' where user='$uid'");
echo "Details were updated";
echo "<br>";
echo "<a href='adetail.html'>Click here to go back</a>";
}
mysqli_close($con);
?>