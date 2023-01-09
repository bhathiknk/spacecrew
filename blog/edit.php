<?php
    session_start();
?>
<?php include_once('../log/inc/conn.php');?>
<?php

    if(isset($_GET['post_id'])){

        $Post_Id = $_GET['post_id'];
        $post_title = "";
        $post_sn = "";
        $post_body = "";
        $post_author="";
        $post_create = "";

        $query = "SELECT * FROM post WHERE id = {$Post_Id}";

        $ShowPost = mysqli_query($conn, $query);

            if($ShowPost){

                if(mysqli_num_rows($ShowPost) > 0){

                    $post = mysqli_fetch_assoc($ShowPost);

                    $post_title = $post['Post_Title'];
                    $post_sn = $post['Post_Srt_Nt'];
                    $post_body = $post['Post_Body'];
                    $post_author = $post['Post_Author'];
                    $post_create = $post['Create_at'];

                }

            }
    
    }

?>
<?php

    if(isset($_POST['submit'])){

        $Post_Id = $_GET['post_id'];
        $post_title =Input_varify( $_POST['title']);
        $post_sn = input_varify($_POST['Shrt_Nt']);
        $post_body = $_POST['Post_body'];
        $post_author=$_POST['post_author'];

        $query = "UPDATE post SET 
        Post_Title ='{$post_title}',
        Post_Srt_Nt ='{$post_sn}',
        Post_Body = '{$post_body}',
        Post_Author='{$post_author}' WHERE id = {$Post_Id}";

        $result = mysqli_query($conn, $query);

        if($result){
            $msg = "
            
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
            <strong>Post Updated Success!</strong> Your Post Updated now.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>

            ";
        }
        else{
            echo mysqli_error($conn);
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
    <title>Edit Post</title>

    <style>
        #card-body{
            color: white;
            background-color: black;
        }
        .container{
            background: rgb(5,3,110);
background: radial-gradient(circle, rgba(5,3,110,1) 38%, rgba(0,0,0,1) 85%);
        }
    </style>
</head>
<body>

    <?php include_once('../blog/edit.php')?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header" id="card-header">
                        <h4>Edit Your Post</h4>
                    </div>
                    <div class="card-body" id="card-body">

                    <form action="edit.php?post_id=<?php echo $Post_Id;?>" method="POST" autocomplete="off">

                        <?php if(!empty($msg)){echo $msg;}?>

                       <div class="form-group">
                         <label for="">Title</label>
                         <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $post_title;?>">
                         <small id="helpId" class="text-muted">Post Title</small>
                       </div>

                       <div class="form-group">
                           <label for="">Short Note</label>
                           <textarea class="form-control" name="Shrt_Nt" id="Shrt_Nt" rows="5"><?php echo $post_sn;?></textarea>
                            <small id="helpId" class="text-muted">Post Content</small>
                        </div>

                       
                         <div class="form-group">
                           <label for=""></label>
                           <script src="Plugin/ckeditor/ckeditor.js"></script>
                           <textarea class="form-control" name="Post_body" id="Post_body" rows="15"><?php echo $post_body;?></textarea>
                           <script>
                                CKEDITOR.replace( 'Post_body' );
                            </script>
                            <small id="helpId" class="text-muted">Post Content</small>

                            <div class="form-group">
                         <label for="">author</label>
                         <input type="text" name="post_author" id="post_author" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $post_author;?>">
                         <small id="helpId" class="text-muted">Post Author</small>
                       </div>
                            
                        </div>

                    <div class="card-footer" id="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>

</body>
</html>