
<?php
session_start();
?>




<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>SpaceCrew blog</title>
  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="blog/css/main.css">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>

<!-- CSS
================================================== -->



<!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/owl.carousel.css">
<!-- bootstrap.min -->
    <link rel="stylesheet" href="css/animate.css">
<!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
<!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>





</head>
<div id="preloader">
  <div class="loder-box">
    <div class="planet"></div>
  </div>
</div>
<body>
  
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
<li><a href="./index.php">Home</a></li>
<li><a href="solar.html">Solar System</a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="contact.html">Contact Us</a></li> 



<?php
      
        if(isset($_SESSION['username'])){
          
          echo "
          

                <li >
                <a href='log/signout.php'>Create Blog</a>
                </li>

          ";

        }
      
      ?>

</ul>
</nav>

</div>


</header>



      <main>

        <section>
        <div class="container">
          <div class="row mainmargin">
            <div class="blog col-md-8">
              <div class="all-posts">
                <div class="post-item">
                  <div class="post-img"><img src="blog/img/atomic presthood cover.jpg" alt=""></div>
                  <div class="post-main-info">
                    <p class="post-title">THE ATOMIC PRIESTHOOD AND NUCLEAR WASTE MANAGEMENT: RELIGION, SCI-FI LITERATURE, AND THE END OF OUR CIVILIZATION.</p>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i> D.M.B.N.Kavindya Fernando</span><span><i class="far fa-calendar"></i> 15 12 2022</span>
                    </div>
                    <p> ❖ According to the report’s author Thomas Sebok, the most effective technique for communication across long periods of time are messages transmitted through religion and folklore. Sebok suggests ‘piggy–backing’ the message of nuclear waste locations onto an existing religion whilst entrusting the full information to a select group of scientists to safeguard and relay to the next generation. – in Sebeok’s words an ‘Atomic Priesthood.’</p>
                    <a href="blog/blog single pages/atomic presthood.html" class="main-button">Read More</a>
                  </div>
                </div>


                <div class="post-item">
                  <div class="post-img"><img src="blog/img/black hole cover.jpg" alt=""></div>
                  <div class="post-main-info">
                    <p class="post-title">What Are Black Holes?</p>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i>  R.P.D.S.Vilochana Rajapaksha.</span><span><i class="far fa-calendar"></i> 18 12 2022</span><span>
                    </div>
                    <p> ❖ We still don't know exactly what is inside a black hole. But this is a simple description of the
                      facts beyond the boundary, where the black hole starts.</p>
                    <a href="blog/blog single pages/black hole.html" class="main-button">Read More</a>
                  </div>
                </div>


                <div class="post-item">
                  <div class="post-img"><img src="blog/img/moon cover.jpg" alt=""></div>
                  <div class="post-main-info">
                    <p class="post-title">Why can we only see the Moon's nearside from Earth?</p>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i> D.M.B.N.Kavindya Fernando</span><span><i class="far fa-calendar"></i> 20 12 2022</span>
                    </div>
                    <p> ❖ The Moon orbits Earth once every 27.3 days and spins on its axis once every 27.3 days. This means that although the Moon is rotating, it always keeps one face toward us. Known as “synchronous rotation,” this is why we only ever see the Moon’s nearside from Earth.</p>
                    <a href="blog/blog single pages/moon one side seen.html" class="main-button">Read More</a>
                  </div>
                </div>



                <div class="post-item">
                  <div class="post-img"><img src="blog/img/mars cover.jpg" alt=""></div>
                  <div class="post-main-info">
                    <p class="post-title">Elon Musk on planning for Mars : “The city has to survive if the resupply ships stop coming from Earth”</p>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i>Sahan Ransika Perera </span><span><i class="far fa-calendar"></i> 25 12 2022</span>
                    </div>
                    <p> ❖ SpaceX CEO Elon Musk's goal is to "make life multi-planetary" and "it means that we need to have a self-sustaining city on Mars," he told Ars Technica.</p>
                    <a href="blog/blog single pages/elon with mars.html" class="main-button">Read More</a>
                  </div>
                </div>
                
              </div>
              <nav aria-label="blog navigation">
                <ul class="pagination">
                  <li class="page-item ">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="sidebar col-md-4">
            
              <div class="recent-posts pt-5">
                <h4 class="mb-3">RECENT POSTS</h4>
                <div class="post-item">
                  <a href="blog/single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>


                <div class="post-item">
                  <a href="blog/single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>


                <div class="post-item">
                  <a href="blog/single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>

            </div>
            </div>
          </div>
        </div> 
        </section>   
      </main>
      <footer id="footer">
        <div class="container">
          <div class="row text-center">
            <div class="footer-content">
              <p>Copyright &copy; 2022 Design and Developed By <a href="index.php"><br> SpaceCrew</a> </p>
            </div>
          </div>
        </div>
      </footer>
     



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
<!--
          This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
          You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
          --> 
