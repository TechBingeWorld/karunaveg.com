<?php

// function getPost($db,$id){
//     $query="SELECT * FROM posts WHERE id=$id";
//     $run=mysqli_query($db,$query);
//     $data = mysqli_fetch_assoc($run);
//     return $data['name'];
// }

function getCategory($db,$id){
    $query="SELECT * FROM category WHERE id=$id";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['name'];
}

function getAllCategory($db){
    $query="SELECT * FROM category";
    $run=mysqli_query($db,$query);
    $data = array();
    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
}

function getImagesByPost($db,$post_id){
    $query="SELECT * FROM images WHERE post_id=$post_id";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;
    
}

function getComments($db,$post_id){
    $query="SELECT * FROM comments WHERE post_id=$post_id ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}


function getVideoComments($db,$video_blog_id){
    $query="SELECT * FROM `comments_video_blog` WHERE `video_blog_id`= $video_blog_id ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}


function getSubMenu($db,$menu_id){
    $query="SELECT * FROM submenu WHERE parent_menu_id=$menu_id";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data;  
}
function getSubMenuNo($db,$menu_id){
    $query="SELECT * FROM submenu WHERE parent_menu_id=$menu_id";
    $run=mysqli_query($db,$query);
    return mysqli_num_rows($run);
}

function getAdminInfo($db,$email){
    $query="SELECT * FROM admin WHERE email='$email'";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data;
}

function getPostThumb($db,$id){
    $query="SELECT * FROM images WHERE post_id=$id";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['image'];
}

function getMenu($db){
    $query="SELECT * FROM menu";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}



function getAllSubMenu($db){
    $query="SELECT * FROM submenu";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}
function getAllMenu($db){
    $query="SELECT * FROM menu";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}

function getMenuName($db,$id){
    $query="SELECT * FROM menu WHERE id=$id";
    $run=mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['name'];
}

function getAllPost($db){
    $query="SELECT * FROM posts ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}

function getAllVideoblogs($db){
    $query="SELECT * FROM videos ORDER BY id DESC";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}

function getAllCareer($db){
    // $query="SELECT * FROM career ORDER BY id DESC";
    $query="SELECT * FROM career ";
    $run=mysqli_query($db,$query);
    $data = array();

    while($d=mysqli_fetch_assoc($run)){
        $data[]=$d;
    }
    return $data; 
}



function getAllImage($db)
{
    $query = "SELECT * FROM images ORDER BY id DESC";
    $run = mysqli_query($db, $query);
    $data = array();

    while($fetch = mysqli_fetch_assoc($run))
    {
        $data[] = $fetch; 
    }
    return $data;
}



function getAllVideos($db)
{
    $query = "SELECT * FROM videos ORDER BY id DESC";
    $run = mysqli_query($db, $query);
    $data = array();

    while($fetch = mysqli_fetch_assoc($run))
    {
        $data[] = $fetch; 
    }
    return $data;
}


/////////////////////////////////////////////////////////////////////////////

// check if the user has clicked the button "UPLOAD" 
// If upload button is clicked ...
if(isset($_POST['addPostImage'])) 
{
 
// $ptitle=mysqli_real_escape_string($db,$_POST['post_title']);
// $url=mysqli_real_escape_string($db,$_POST['post_url']);
// $about_blog=mysqli_real_escape_string($db,$_POST['about_blog']);
// $pcontent=mysqli_real_escape_string($db,$_POST['post_content']);
// $cid=$_POST['post_category'];
//    $query="INSERT INTO posts (`title`, `content`, `url`,`about_blog`, `category_id`) VALUES('$ptitle','$pcontent','$url','$about_blog',$cid)";
//     $run=mysqli_query($db,$query);


// $post_id=mysqli_insert_id($db);    

require('db.php');
error_reporting(0);

// Image section starts from here..
// $post_id = 12;
$msg = "";

   // echo "Working..";
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "../uploaded_images/".$filename;
		


		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			// Get all the submitted data from the form
		    $sql = "INSERT INTO images (`post_id`, `image`) VALUES ('0', '$filename')";
            // Execute query
		    mysqli_query($db, $sql);

		}
        else
        {
			$msg = "Failed to upload image";
            
	    }

        header('location:../admin/index.php');
}


?>
 