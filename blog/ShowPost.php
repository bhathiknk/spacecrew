<?php
    session_start();
?>
<?php include_once('../log/inc/conn.php');?>
<?php

    if(isset($_GET['Post_Id'])){

        $Post_Id = $_GET['Post_Id'];
        $post_title = "";
        $post_body = "";
        $post_author="";
        $post_create = "";

        $query = "SELECT * FROM post WHERE id = {$Post_Id}";

        $ShowPost = mysqli_query($conn, $query);

            if($ShowPost){

                if(mysqli_num_rows($ShowPost) > 0){

                    $post = mysqli_fetch_assoc($ShowPost);

                    $post_title = $post['Post_Title'];
                    $post_body = $post['Post_Body'];
                    $post_author = $post['Post_Author'];
                    $post_create = $post['Create_at'];

                }

            }
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Plugin/bootstrap.min.css">
    <script src="Plugin/jquery.min.js"></script>
    <script src="Plugin/bootstrap.min.js"></script>
    <title>Show Post</title>

    <style>

  html {
  scroll-padding-top: 0px;
}
        .card-body{
            color: white;
            background: rgb(16,11,255);
background: radial-gradient(circle, rgba(16,11,255,1) 0%, rgba(0,0,0,1) 85%);
        }
        #backgroud{
            background-color: black;
margin-bottom: 0;
margin-top: 0;
padding-bottom: 10%;
        }


        .section{
            margin-top:0;
            padding-bottom: 50%;
        }
        .card-header{
            background-color: rgba(0,0,0,0.);
        }
            
    </style>
</head>
<body>

    <?php include_once('../blog/ShowPost.php')?>


    <section id="backgroud">  
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <div class="card mt-4">
                <div class="card-header">
                    <?php echo $post_title;?>
                </div>
                <div class="card-body">
                    <?php echo $post_body;?>
                </div>
                <div class="card-footer">
                    <?php echo $post_author;?>
                </div>
                <div class="card-footer">
                    <small><?php echo $post_create;?></small>
                </div>
                <div>
                    <br>
                    <?php
                    
                        if(isset($_SESSION['username'])){
                            echo "<a class='btn btn-primary' href='./edit.php?post_id={$Post_Id}'>Edit Post</a>";
                        }
                    
                    ?>
                </div>
            </div>

            </div>
        </div>
    </div>
    </section>

</body>
</html>