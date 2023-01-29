<?php include_once('./log/inc/conn.php');?>


<?php

    if(isset($_POST['submit'])){

        //Defiene and assign a values for the variable
        $con_Name = input_varify($_POST['name']);
        $con_Email =input_varify ($_POST['email']);
        $con_Subject =input_varify ($_POST['subject']);
        $con_Message = ($_POST['message']);


        //Build database insert query
        $query = "INSERT INTO contact(Name,Email,Subject,Message) VALUES('{$con_Name}','{$con_Email}','{$con_Subject}','{$con_Message}')";

        $result = mysqli_query($conn, $query);

        if($result){
            $msg = "
            
            <div class='alert alert-primary alert-dismissible ' role='alert'>
            <strong>Your massage send successfully!</strong> Thanks for your feedback.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>

            ";
        }
        else{
            echo "Message Not Send " . mysqli_error($conn);
        }

    }

    function input_varify($data){

        $data = TRIM($data);
        //conver special chars to html entities
        $data = htmlspecialchars($data);
        $data  = stripslashes($data);
        //conver special chars to html entities


        return $data;
    }

?>


<!DOCTYPE html>

 <html lang="en" class="no-js"> 
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SpaceCrew Contact</title>
		<!-- Meta Description -->
        

		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS
		================================================== -->

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Developer details Stylesheet -->
		<link rel="stylesheet" href="css/aboutus-dev-acc.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="planet"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">Space<span>Crew</span> </a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                  <ul class="nav navbar-nav navbar-right navbar-nav-primary">
      <li><a href="index.php">Home</a></li>
	  <li><a href="solar.html">Solar System</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.php">Contact Us</a></li>
	  
    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

		<main class="site-content" role="main">


<br></br>
<br></br>

<?php include_once('./contact.php')?>
<!-- Contact section -->
<section id="contact" >
	<div class="container">
		<div class="row">

			<div class="sec-title text-center wow animated fadeInDown">
            <?php if(!empty($msg)){echo $msg;}?>
           
				<h2>Contact</h2>
				<p>Leave a Message</p>
			</div>


			<div class="col-md-7 contact-form wow animated fadeInLeft">
				<form action="contact.php" method="POST">

					<div class="input-field">
						<input type="text" id="name" name="name" class="form-control" placeholder="Your Name...">
					</div>
					<div class="input-field">
						<input type="email" id="email" name="email" class="form-control" placeholder="Your Email...">
					</div>
					<div class="input-field">
						<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject...">
					</div>
					<div class="input-field">
						<textarea id="message" name="message"  class="form-control" rows="12" placeholder="Messages..."></textarea>
					</div>
					   <button type="submit" name="submit"  class="btn btn-blue btn-effect">Send</button>
                
				</form>
			</div>

			<div class="col-md-5 wow animated fadeInRight">
				<address class="contact-details"></address>
					<h3>Contact Us</h3>
					
					<p><i class="fa fa-envelope"></i>SpaceCrew@gmail.com</p>

				</address>
			</div>

		</div>
	</div>
</section>
<!-- end Contact section -->
<br></br>

<footer id="footer">
	<div class="container">
		<div class="row text-center">
			<div class="footer-content">
				<p>Copyright &copy; 2022 Design and Developed By <a href="index.php"><br> SpaceCrew</a> </p>
			</div>
		</div>
	</div>
</footer>
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>












