<?php
require('db.php');

if(isset($_POST['addcomment'])){
    // print_r($_POST);
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$comment=mysqli_real_escape_string($db,$_POST['comment']);
$post_id=$_POST['post_id'];
$query="INSERT INTO comments(comment,name,email,post_id) VALUES('$comment','$name','$email',$post_id)";

if(mysqli_query($db,$query)){
    header("location:../video-blog-single.php?id=$post_id");
}
else
{
    echo "<script>
                alert('comment is not addedd !');
                window.history.back();
          </script>";
}

}


if(isset($_POST['addVideoBlogComment'])){
    // print_r($_POST);
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$comment=mysqli_real_escape_string($db,$_POST['comment']);
$video_blog_id=$_POST['video_blog_id'];
$query="INSERT INTO comments_video_blog (comment,name,email,video_blog_id) VALUES('$comment','$name','$email',$video_blog_id)";

if(mysqli_query($db,$query)){
    header("location:../video-blog-single.php?id=$video_blog_id");
}

else
{
    echo "<script>
                alert('comment is not addedd !');
               
          </script>";
}

}



?>