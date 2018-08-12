<?php
session_start();
$con=mysqli_connect("localhost","root","","id3156387_seekdb");
if(isset($_POST['abt']))
{
$u=$_POST["uname"];
$pass=$_POST["pass"];
$rows=mysqli_query($con,"select * from alogin where USERNAME='$u' AND PASSWORD='$pass'");
$c=mysqli_num_rows($rows);
if($c==0)
  {
  $Message=urlencode("Entered details are incorrect");
  header("Location: index.php?Error=".$Message);
  }
else
  {
  $Message=urlencode($u);
  header('Location: adetail.html?id='.$u);
  }
}

if(isset($_POST['cbt']))
{
$u=$_POST["uname"];
$pass=$_POST["pass"];
$rows=mysqli_query($con,"select * from clogin where USERNAME='$u' AND PASSWORD='$pass'");
$c=mysqli_num_rows($rows);
if($c==0)
  {
  $Message=urlencode("Entered details are incorrect");
  header('Location: index.php?Error='.$Message);
  }
else
  {   
    header('Location: company.html');
  }
}
mysqli_close($con);
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ATS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <link rel="stylesheet" href="assets/css/raleway-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/imagess/logo12.png" alt="" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#company">For Companies</a></li>
                        <li><a href="#applicant">Looking For Job?</a></li>
        

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-img">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="home-content">

                                <h5>Find What You Are Looking For</h5>
                                <h1>The Perfect Place for both <span>Applicants</span> and <span>Companies</span>.</h1>


                               

                            </div>
                        </div>
                    </div>

                </div>
            </div>	
        </header>

        <!-- Sections -->
        <section id="about" class="sections">

            <div class="heading-content text-center">

               <h3>Know About Us</h3>

                <div class="separator"></div>

                <p>Catering to the needs of both Companies and those looking for a job.</p>
            </div>

            <div class="about-bg">
                <div class="container">

                    <!-- Example row of columns -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="about-content">

                               <h3>Job Seeker</h3>
                                <p>Are you a copmany searching for fresh talent? Are you a hopeful applicant looking for a job? Well search no more.</p>
                                <p>We have one of the largest databses of all applicants in the world. If yours is not there, add it in now. As for companies, we 
                                offer you this pool of talent at a reasonable price. Looking for someone specific to work for you? Fret no more, just sign up, login, and search for what you want. Our engines will give you the perfect result.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="about-img">
                                <img src="assets/images/about-img.jpg" alt="" />
                            </div>
                        </div>

                    </div>
                </div> <!-- /container -->   
            </div>

        </section>

        <!-- Sections -->
    

        <!-- Sections -->
          <section id="our-skills" class=" skills skill-bg">
            <div class="overlay-img">
                <div class="container sections text-center">
                    <div class="skill-heading">

                        <h4>Our 2 main clients from around the world</h4>

                    </div>
                    <!-- Example row of columns -->
                    <div class="row">
                            
                            <div class="col-sm-6 text-center">
                                <div class="main-skill">
                                    <div class="chart-round">
                                        <div class="chart" data-percent="68">
                                            <span class="percent"></span>
                                        </div>
                                    </div>
                                    <div class="skills-text">Companies</div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 text-center">
                                <div class="main-skill">
                                    <div class="chart-round">
                                        <div class="chart" data-percent="82">
                                            <span class="percent"></span>
                                        </div>
                                    </div>
                                    <div class="skills-text">Applicants</div>
                                </div>
                            </div>

                        </div> 

                </div>
            </div> <!-- /container -->  
        </div>      
    </section>

<section id="company" class="sections">
      <div class="row">
      
         <div class="col-md-12 col-sm-12 col-xs-12">
                      <br><h1 align="center">COMPANY</h1>
             <form action="index.php" method="POST">
             <div class="imgcontainer">
              <img src="assets/images/comp.png">
               </div>
              <div class="container">
                 <label><b>Username</b></label><br>
                  <input type="text" placeholder="Enter Username" name="uname" required>                
                     <br><label><b>Password</b></label><br>
                            <input type="password" placeholder="Enter Password" name="pass" required><br>
                    <button type="SUBMIT" name="cbt" class="hey">Login</button>
                    <br><input type="checkbox" checked="checked">Remember me<br>      
             </form>

             <br><button id="myBtn" type="SUBMIT" data-target="#myModal" class="hey">Sign Up</button>
             </div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
       <form action="csignup.php" method="POST">
              <div class="container">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                 <label><b>COMPANY NAME<b></label><br>
                  <input type="text" placeholder="Enter Fullname" name="cname" required>                
                     <br><label><b>COMPANY EMAILl</b></label><br>
                            <input type="text" placeholder="Enter email" name="cemail" required><br>
                               <br><label><b>COMPANY USERNAME</b></label><br>
                            <input type="text" placeholder="Enter username" name="cuname" required><br>
                            <br><label><b>PASSWORD</b></label><br>
                            <input type="password" placeholder="Enter password" name="cpass" required><br>
                            <br><label><b>Re-password</b></label><br>
                            <input type="password" placeholder="Enter password" name="crpass" required><br>
                    <button type="SUBMIT" class="hey">SUBMIT</button>
                    </div>
                </div>
              </form>

  </div>

</div>
            <!-- /container -->       
    </section>

    <!-- Sections -->
    <section id="our-client" class="sections different-bg">
        

         
    </section>

   <section id="applicant" class="sections lightbg">
       <div class="col-md-12 col-sm-12 col-xs-12">
                <br> <h1 align="center">APPLICANT</h1>
                  <form action="index.php" method="POST">
             <div class="imgcontainer">
              <img src="assets/images/man.png">
               </div><br>
              <div class="container">
                 <label><b>Username</b></label><br>
                  <input type="text" placeholder="Enter Username" name="uname" required>                
                     <br><label><b>Password</b></label><br>
                            <input type="password" placeholder="Enter Password" name="pass" required><br>
                    <button type="SUBMIT" name="abt" class="hey">Login</button>
                   <br><input type="checkbox" checked="checked">Remember me<br>
                    
              </form>
              <br><button id="myBtn1" type="SUBMIT" data-target="#myModal1" class="hey">Sign Up</button>
               </div>
<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal1-content">
    <span1 class="close1">&times;</span1>
       <form action="asignup.php" method="POST">
              <div class="container">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                 <label><b>NAME<b></label><br>
                  <input type="text" placeholder="Enter Fullname" name="fname" required>                
                     <br><label><b>email</b></label><br>
                            <input type="text" placeholder="Enter email" name="email" required><br>
                               <br><label><b>USERNAME</b></label><br>
                            <input type="text" placeholder="Enter username" name="uname" required><br>
                            <br><label><b>password</b></label><br>
                            <input type="password" placeholder="Enter password" name="pass" required><br>
                            <br><label><b>Re-password</b></label><br>
                            <input type="password" placeholder="Enter password" name="rpass" required><br>
                    <button type="SUBMIT" class="hey">SUBMIT</button>
                </div>
                    </div>
              </form>
  </div>

</div>
    
             </div>

      </div>
    </div>
    </div>

    </section>

    

    <!--Footer-->
    <footer id="footer" class="sections footer different-bg">

     

    </footer>
	

			
	</div>
	
	<footer class="copyright-footer">
		
	</footer>


    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>
