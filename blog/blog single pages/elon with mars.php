<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="82">
  <div class="topnav" id="myTopnav">
    <a href="/index.php" >Go To Home</a>
    <a href="/blog.html" >Go To Blog</a>
    
    </a>
    </div>
      <main>
        <div class="container">
          <div class="row mainmargin">
            <div class="single-post col-md-8">
              <h2 class="underscore">Elon Musk on planning for Mars : “The city has to survive if the resupply ships stop coming from Earth”</h2>
              <div class="post-meta">
                <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
              </div>
              <img src="../img/mars single page.jpg" alt="">
             
              <figure class="quote text-end">
                <blockquote class="blockquote">
                  <p>I would like to die on Mars. Just not on impact..</p>
                </blockquote>
                <figcaption class="blockquote-footer">
              -Elon Musk <cite title="Source Title"></cite>
                </figcaption>
              </figure>
              <p>Musk has long seen a visit to Mars as a goal. In 2016, he said that he wanted to build a rocket capable of taking people to Mars and supporting a permanent city on the planet.
                "It's something we can do in our lifetimes," he told an audience of 100,000 watchers at the International Astronautical Congress in Guadalajara, Mexico. "You could go."
                But Musk's older predictions don't necessarily match up with his latest. In 2016, he told the Y Combinator, a startup accelerator, that getting a "meaningful number of people" on Mars was possible "in about 10 years, maybe sooner, maybe nine years."
                
                The two-part mission was designed to investigate whether there is or ever was life on Mars.
                "While recognizing the impact on scientific exploration of space, ESA is fully aligned with the sanctions imposed on Russia by its Member States," the intergovernmental organization said in a release.
                </p>
              <div class="navigation">
                <a class="prew" href="/blog.html"><i class="fas fa-chevron-left"></i> PREVIOUS</a>
              </div>
              <div class="line"></div>
              <form id="commentForm">
                <!-- Message input -->
                <div class="mb-3">
                  <label class="form-label" for="comment">Leave a Comment</label>
                  <textarea class="form-control" id="comment" type="text" placeholder="" style="height: 10rem;" data-sb-validations="required"></textarea>
                  <div class="invalid-feedback" data-sb-feedback="message:required">Comment is required.</div>
                </div>
                <!-- Name input -->
                <div class="mb-3">
                  <input class="form-control" id="name" type="text" placeholder="Name *" data-sb-validations="required" />
                  <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>
                <!-- Email address input -->
                <div class="mb-3">
                  <input class="form-control" id="emailAddress" type="email*" placeholder="Email Address *" data-sb-validations="required, email" />
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                  <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>
                <!-- Form submissions success message -->
                <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center mb-3">Form submission successful!</div>
                </div>
                <!-- Form submissions error message -->
                <div class="d-none" id="submitErrorMessage">
                  <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Form submit button -->
                <div class="d-grid">
                  <button class="main-button" id="submitButton" type="submit">Post Comment</button>
                </div>
              </form>
            </div>
            <div class="sidebar col-md-4">
              <div class="input-group">
                <div class="form-outline">
                  <input id="search-input" type="search" id="form1" class="form-control" placeholder="search" />
                </div>
                <button id="search-button" type="button" class="btn dark">
                  <i class="fas fa-search"></i>
                </button>
              </div>
              <div class="recent-posts pt-5">
                <h4 class="mb-3">RECENT POSTS</h4>
                <div class="post-item">
                  <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>
                <div class="post-item">
                  <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>
                <div class="post-item">
                  <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i> 30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                  </div>
                  <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                </div>
                
                
            </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="text-center text-uppercase py-5">
        
        <div class="copyright pt-4 text-muted text-center">
          <p>Copyright &copy; 2022 Design and Developed By <a href="index.php"><br> SpaceCrew</a> </p>
          <!--
          This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
          You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
          --> 
      </div>
      </footer>
      <div class="fb2022-copy">Fbee 2022 copyright</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
</body>
</html>
