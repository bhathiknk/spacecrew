<?php
    session_start();
?>


<?php include_once('../log/inc/conn.php');?>
<?php

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }

?>
<?php

    if(isset($_POST['submit'])){

        //Defiene and assign a values for the variable
        $post_title = input_varify($_POST['title']);
        $post_body = ($_POST['Post_body']);
        $Post_srt_nt = ($_POST['Shrt_Nt']);
        $post_author = input_varify($_POST['post_author']);


        //Build database insert query
        $query = "INSERT INTO post(Post_Title,Post_Srt_Nt,Post_Body,Post_Author,Create_at)VALUES('{$post_title}','{$Post_srt_nt}','{$post_body}','{$post_author}',NOW())";

        $result = mysqli_query($conn, $query);

        if($result){
            $msg = "
            
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
            <strong>Post Create Success!</strong> Your Post visibale now.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>

            ";
        }
        else{
            echo "Post Not Created " . mysqli_error($conn);
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Plugin/bootstrap.min.css">
    <script src="Plugin/jquery.min.js"></script>
    <script src="Plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sign_up.css">
    <title>Create Post</title>
    <style>
        #card-body{
            background-color: black;
            color: white;
        }
        #background{
            background: rgb(5,3,110);
background: radial-gradient(circle, rgba(5,3,110,1) 38%, rgba(0,0,0,1) 85%);
        }
    </style>
</head>
<body>

<?php include_once('../blog/create_post.php')?>

<section id=backgroud> 
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card mt-4">
                <div class="card-header" id="card-header">
                    <h4>Create a New Post</h4>
                </div>
                <div class="card-body" id="card-body">

                <form action="create_post.php" method="POST" autocomplete="off">

                    <?php if(!empty($msg)){echo $msg;}?>

                   <div class="form-group">
                     <label for="">Title</label>
                     <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
                     <small id="helpId" class="text-muted">Post Title</small>
                   </div>

                   <div class="form-group">
                       <label for="">Short Note</label>
                       <textarea class="form-control" name="Shrt_Nt" id="Shrt_Nt" rows="5"></textarea>
                        <small id="helpId" class="text-muted">Post Content</small>
                    </div>

                   
                     <div class="form-group">
                       <label for=""></label>
                       <script src="Plugin/ckeditor/ckeditor.js"></script>
                       <textarea class="form-control" name="Post_body" id="Post_body" rows="15"></textarea>
                       <script>
                            CKEDITOR.replace( 'Post_body' );
                        </script>
                        <small id="helpId" class="text-muted">Post Content</small>
                    </div>

                    <div class="form-group">
                     <label for="">author</label>
                     <input type="text" name="post_author" id="post_author" class="form-control" placeholder="" aria-describedby="helpId">
                     <small id="helpId" class="text-muted">Post Author</small>
                   </div>

                <div class="card-footer" id="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Create Post</button>
                </div>

                </form>
            </div>

        </div>
    </div>
</div>
    </section>

</body>
</html>