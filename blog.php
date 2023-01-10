<?php
    session_start();
?>
<?php include_once('./log/inc/conn.php');?>
<?php

    $postbody = "";

    $query = "SELECT * FROM post";

    $ShowPost = mysqli_query($conn, $query);

    if($ShowPost){

        if(mysqli_num_rows($ShowPost) > 0){

            while($post = mysqli_fetch_assoc($ShowPost)){

                $postbody .= "<a id='Post_link' href='blog/ShowPost.php?Post_Id={$post['id']}'>";

                    $postbody .= "<div id='main_div'>";

                        $postbody .= "<h1 id='title'>";
                            $postbody .= "{$post['Post_Title']}";
                        $postbody .= "</h1>";

                        $postbody .= "<div id='body'>";
                            $postbody .= "{$post['Post_Srt_Nt']}";
                        $postbody .= "</div>";

                        $postbody .= "<div id='body'>";
                        $postbody .= "<small>";
                            $postbody .= "Author - {$post['Post_Author']}";
                        $postbody .= "</small>";
                    $postbody .= "</div>";

                        $postbody .= "<div id='body'>";
                            $postbody .= "<small>";
                                $postbody .= "Created at {$post['Create_at']}";
                            $postbody .= "</small>";
                        $postbody .= "</div>";

                    $postbody .= "</div>";

                $postbody .= "</a>";
                

            }

        }

    }

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


    <style>

        #Post_link{
            text-decoration: none;
        }

        #main_div{

            border: 1px solid #fff;
            margin-bottom: 20px;
            padding: 25px;
            color: #fff;
            width: 100%;

        }
       

    </style>





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
<li><a href="blog.php">Blog</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="contact.php">Contact Us</a></li> 



<?php
      
        if(isset($_SESSION['username'])){
          
          echo "
          

                <li >
                <a href='blog/create_post.php'>Create Blog</a>
                </li>

          ";

        }
      
      ?>

</ul>
</nav>

</div>


</header>



      <main >

        <section>
        <div class="container">
          <div class="row mainmargin">
            <div class="blog col-md-8">
              <div class="all-posts">
                

                
                <div class="container">
                 <div class="row">
                  <div class="col-md-12">
                <div>
                    <?php echo $postbody?>
                    </div>
                  </div>
                </div>
              </div>
                
              </div>            
            </div>         
          </div>
        </div> 


        
        </section>  
      </main>
     



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
