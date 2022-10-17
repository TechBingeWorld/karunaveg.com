<?php
require('db.php');
error_reporting(0);
?>
<?php

// If upload button is clicked ...
if (isset($_POST['addpost'])) 
{
 
	$ptitle=mysqli_real_escape_string($db,$_POST['post_title']);
	$url=mysqli_real_escape_string($db,$_POST['post_url']);
	$about_blog=mysqli_real_escape_string($db,$_POST['about_blog']);
	$pcontent=mysqli_real_escape_string($db,$_POST['post_content']);
	$cid=$_POST['post_category'];
   	$query="INSERT INTO posts (`title`, `content`,`about_blog`, `url`, `category_id`) VALUES('$ptitle','$pcontent','$about_blog','$url',$cid)";
    $run=mysqli_query($db,$query);


$post_id=mysqli_insert_id($db);     // this method takes the id of last query
// echo $post_id;



// Image section starts from here..
$msg = "";

   // echo "Working..";
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "../uploaded_images/".$filename;
		


		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			// Get all the submitted data from the form
		    $sql = "INSERT INTO images (`post_id`, `image`) VALUES ('$post_id', '$filename')";
            // Execute query
		    mysqli_query($db, $sql);

		}
        else
        {
			$msg = "Failed to upload image";
            
	    }

		echo"?<script>
				alert('Post updated successfully');
				window.location.href = '../admin/index.php?manage_blogs';
			</script>";

        // header('location:../admin/index.php?manage_blogs');
}


?>