<?php include_once('inc/conn.php');?>
<?php

    if(isset($_POST['submit'])){

        //Declaring variables and assign empty values
		$username = "";
        $email = "";
        $password = "";
        $msg = "";

        $username = input_varify($_POST['username']);
        $email = input_varify($_POST['email']);
        $password = input_varify($_POST['password']);

        $query1 = "SELECT * FROM users WHERE username = '{$username}' AND email = '{$email}'";

        $ShowResult = mysqli_query($conn, $query1);

        if($ShowResult){

            if(mysqli_num_rows($ShowResult) == 1){

                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Sorry!</strong> This user already have in this system.Please try another email account.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";

          header("Location: ../index.php");

            }
            else{

                $query = "INSERT INTO users(username,email,password,date) VALUES( 
					'{$username}','{$email}','{$password}',NOW()
				)";
        
                
                $result = mysqli_query($conn, $query);
        
                if($result){
                    
                    $msg = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
                    <strong>User Registration Success!</strong> Welcome to the SpaceCrew Community.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
        
                }
                else{
                    echo mysqli_error($conn);
                }

            }

        }

    }


    function input_varify($data){
        //Remove empty spece from user input
        $data = trim($data);
        //Remove back slash from user input
        $data  = stripslashes($data);
        //conver special chars to html entities
        $data = htmlspecialchars($data);

        return $data;
    }

?>


<!doctype html>
<html lang="en">
  <head>
  	<title>SpaceCrew Logging</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg2.png);">




	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Don't Have an account?</h3>
		      	<form action="signup.php"  method="POST">
				  <?php if(!empty($msg)){echo $msg;}?>


		      		<div class="form-group">
		      			<input id="username" name="username" type="text" class="form-control" placeholder="username" required>
		      		</div>
                      <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control" placeholder="email" required>
                    </div>


	            <div class="form-group">
	              <input id="password" name="password" type="password" class="form-control" placeholder="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>

	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
            <p class="w-100 text-center"> Or</p>
				<div class="social d-flex text-center">
	          	<a href="../index.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Go To Home Page</a>
	          </div>

		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

