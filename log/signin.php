

<?php
    session_start();
?>

<?php include_once('inc/conn.php');?>
<?php

    if(isset($_POST['submit'])){

        //Declaring variables and assign empty values
		$username = "";
        $password = "";
        $msg = "";

        $username = input_varify($_POST['username']);
        $password = input_varify($_POST['password']);

        $query1 = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";

        $ShowResult = mysqli_query($conn, $query1);

        if($ShowResult){

            if(mysqli_num_rows($ShowResult) == 1){


				$user = mysqli_fetch_assoc($ShowResult);
                $_SESSION['username'] = $user['username'];
                $_SESSION['User_Lname'] = $user['Lname'];

                header("Location: ../index.php");

            }
            else{

				$msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
				<strong>Sorry!</strong> Please check your email or password.
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				  <span aria-hidden='true'>&times;</span>
				</button>
			  </div>";
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
		      	<h3 class="mb-4 text-center">Have an account?</h3>

		      	<form action="signin.php" method="POST" >
				  <?php if(!empty($msg)){echo $msg;}?>


		      		<div class="form-group">
		      			<input id="username" name="username" type="text" class="form-control" placeholder="Username" required>
		      		</div>


	            <div class="form-group">
	              <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>


	            <div class="form-group">
	            	<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>


	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
			 
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

