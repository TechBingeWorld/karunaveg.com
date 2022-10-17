
<?php
require 'db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="UPDATE `posts` SET `title`='[value-2]',`content`='[value-3]',`url`='[value-4]',`created_at`='[value-5]',`category_id`='[value-6]' WHERE 1 WHERE id=$id";
    mysqli_query($db,$query);
header('location:../admin/index.php?career');
}

?> 