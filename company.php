<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    }
</style>
</head>
<body>
<?php
$exp=$_POST['expe'];
$fow=$_POST['fow'];
$uid=$_POST['uid'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","id3156387_seekdb");
$rows1=mysqli_query($con,"select * from clogin where USERNAME='$uid' and PASSWORD='$pass'");
$c=mysqli_num_rows($rows1);
if($c==0)
    {
    $_SESSION["errormsg"]='Authentication Failed. Try again';
    header("Location: adetail.html?id=".$uid);
    flash('Authentication Failed');
    }
else
    {
    $result = $con->query("select fname,lname,email,phone,country,linkedin,exp,fow,resume from applicant where job='yes' and exp>='$exp' and fow='$fow'");
    if ($result->num_rows > 0)
        {
        echo "<table><tr><th>Name</th><th>Email</th><th>Phone No</th><th>Country</th><th>LinkedIn</th><th>Experience</th><th>Field</th><th>Resume</th></tr>";
        // output data of each row
        echo "<h2>We have found the following matches for your search</h2>";
        while($row = $result->fetch_assoc())
            {
            $url = $row["resume"];
            $urlprof = $row["linkedin"];
            echo "<tr><td>".$row["fname"]." ".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["country"]."</td><td><a href=".$urlprof.">".$row["linkedin"]."</a></td><td>".$row["exp"]."</td><td>".$row["fow"]."</td><td><a href=".$url.">".$row["resume"]."</a></td></tr>";
            }
        echo "</table>";
        }
    else
        {
        $goback = "company.html";
        echo "<h3>Sorry, we have not found anyone who matched your criteria. Why don't you try again in a while</h3>";
        echo "<a href=".$goback.">Click here to alter your search conditions</a>";
        }
    }
mysqli_close($con);
?>
</body>
</html>