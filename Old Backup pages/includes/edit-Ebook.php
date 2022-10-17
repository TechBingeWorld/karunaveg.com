<?php
require 'db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="SELECT * FROM videos WHERE id=$id";
    mysqli_query($db,$query);
header("location:../admin/index.php?edit_Ebook_id=$id");
}

?>