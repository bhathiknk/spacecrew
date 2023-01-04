

<?php
session_start();
?>




<!DOCTYPE html>
 <html lang="en" class="no-js">
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>spaceWeb</title>
     

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
					
					<h11 class="navbar-brand">
						<a href="#body">Space<span>Crew</span> </a>
					</h11>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right">
                  <ul class="nav navbar-nav navbar-right navbar-nav-primary">
      <li><a href="index.php">Home</a></li>
	  <li><a href="solar.html">Solar System</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
	 
  
	  <?php
      
        if(isset($_SESSION['username'])){
          
          echo "
          

                <li >
                <a href='log/signout.php'>Sign Out</a>
                </li>

          ";

        }
        else{

          echo "
          
          <li >
          <a  href='log/signin.php'>Sign In</a>
          </li>

		  <li >
          <a  href='log/signup.php'>Sign up</a>
          </li>
    ";

        }
      
      ?>



    </ul>
    </nav>

    </div>

	
    </header>
        <!--
        End Fixed Navigation
        ==================================== -->

        <!--
        Home Slider
        ==================================== -->



		<section id="home-slider" >
            <div id="slider" >

				<div class="sl-slider" >
					

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
								<div class="overlay"> 
                                <h2 class="animated fadeInDown">The truth is out there.</h2>
                              
                            </div>
                        </div>
						</div>

					</div>

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
								<div class="overlay"> 
                                <h2>Explore, dream, discover.</h2>
                               
                               
                            </div>
                        </div>
						</div>

					</div>

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
								<div class="overlay">
                                <h2>So much universe. And so little time.</h2>
                                
                            </div>
							</div>

							
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!--
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->

                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>


				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
        <!--
        End Home SliderEnd
        ==================================== -->
<br>

			  <!-- portfolio section -->
	<section id="main">
      <video src="video/main.mp4" muted autoplay loop  ></video>
	 
	  <div class="container">
	   <div class="row">
		<div id="portfolio">


			<div id="portfolio-massage">
						<div class="sec-title text-center wow animated fadeInDown">
							
							<div class="portfolio-title"> 
								<br>
								<br> 
								<h2>Planets in Our Solar System</h2>
							<p>The Solar System was formed 4.6 billion years ago from a cloud of gas and dust called the solar nebula. A shock wave from a nearby supernova (big star) explosion probably started it. The Sun formed in the center, and the planets formed around it.</p>
							</div>
							</div>
					
				</div>
          
			
				

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/portfolio/728322.jpg" class="img-responsive" >
								<figcaption  class="mask">
									<h3>Mercury</h3>
									<p>Mercury is the smallest planet in the solar system. </p>
								</figcaption>
								<ul class="external">
									<li><a  class="fancybox"  title="Mercury" data-fancybox-group="works" href="img/portfolio/728322.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
									<li><a href="web/1.Mercury/mercury.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/116940.jpg" class="img-responsive">
								<figcaption class="mask">
									<h3>Venus</h3>
									<p>Venus is the hottest planet in the solar system </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Venus" href="img/portfolio/116940.jpg" data-fancybox-group="works" ><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
									<li><a href="web/2.Venus/venus.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/photo-1614730321146-b6fa6a46bcb4.jpg" class="img-responsive" >
								<figcaption class="mask">
									<h3>Earth</h3>
									<p> Earth is the only place in the known universe confirmed to host life. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Earth" data-fancybox-group="works" href="img/portfolio/52268.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
									<li><a href="web/3.Earth/earth.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/istockphoto-647269852-612x612.jpg" class="img-responsive" >
								<figcaption class="mask">
									<h3>Mars</h3>
									<p>Mars is the only planet in the universe completely inhabited by robots! </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Mars" data-fancybox-group="works" href="img/portfolio/465937.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
									<li><a href="web/4.Mars/mars.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/223952.jpg" class="img-responsive" >
								<figcaption class="mask">
									<h3>Jupiter</h3>
									<p>It is the first of the four "gas giant" planets in proximity to the Sun. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Jupiter" data-fancybox-group="works" href="img/portfolio/223952.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
									<li><a href="web/5.Jupiter/jupiter.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
								</ul>
							</li>

							<li class="portfolio-item">
								<img src="img/portfolio/160366.jpg" class="img-responsive" >
								<figcaption class="mask">
									<h3>Saturn</h3>
									<p>Saturn is a "gas giant" composed primarily of hydrogen and helium. </p>
								</figcaption>
								<ul class="external">
									<li><a class="fancybox" title="Saturn" data-fancybox-group="works" href="img/portfolio/160366.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
									<li><a href="web/6.Saturn/saturn.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
								</ul>
							</li>

              <li class="portfolio-item">
                <img src="img/portfolio/12345.jpg" class="img-responsive" >
                <figcaption class="mask">
                  <h3>Uranus</h3>
                  <p> the planet has an enormous 98 degree tilt on its axis. </p>
                </figcaption>
                <ul class="external">
                  <li><a class="fancybox" title="Uranus" data-fancybox-group="works" href="img/portfolio/12345.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                  <li><a href="web/7.Uranus/uranus.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                </ul>
              </li>

              <li class="portfolio-item">
                <img src="img/portfolio/istockphoto-1023066596-170667a.jpg" class="img-responsive" >
                <figcaption class="mask">
                  <h3>Neptune</h3>
                  <p>Neptune’s Surface Gravity is Almost Earth-like </p>
                </figcaption>
                <ul class="external">
                  <li><a class="fancybox" title="Neptune" data-fancybox-group="works" href="img/portfolio/169387.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
                  <li><a href="web/8.Neptune/neptune.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                </ul>
              </li>


			</ul>


		</div>

	 </div>
	  </div>
  </section>
<!-- end portfolio section -->

<!-- Social section -->
		
<section id="social" class="parallax">
	<div class="col-12"> 
	<div class="overlay">
		<div class="container">
			<div class="row">

				<div class="sec-title text-center white wow animated fadeInDown">
					<div class="our-mission">  
					<h2 >OUR MISSION</h2>
				<p >Our mission is to connect the universe by providing realistic knowledge about planets in a simpler form, which helps users to directly find information in a successive manner.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>
</section>
<!-- end Social section -->

		<!-- Footer -->
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

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
