<?php
require 'db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM videos WHERE id=$id";
    mysqli_query($db,$query);
header('location:../admin/index.php?manage_video_blogs');
}

?>