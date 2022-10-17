<?php
session_start();
require('../includes/db.php');
include('../includes/function.php');
error_reporting(0);
if(!isset($_SESSION['isUserLoggedIn'])){
  header('Location:login.php');
}

$admin=getAdminInfo($db,$_SESSION['email']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin panel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="../assets/images/karunaveg-logo.png" alt="">
        <span class="d-none d-lg-block">Karuna Veg</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar pt-3">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->




        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$admin['full_name']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?=$admin['full_name']?></h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="../includes/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">




      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-person"></i>
          <span>Create New Blog</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?manage_blogs">
          <i class="bi bi-question-circle"></i>
          <span>Manage Blogs</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?cateogory">
          <i class="bi bi-envelope"></i>
          <span>Blogs Categories</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?career">
          <i class="bi bi-envelope"></i>
          <span>Career</span>
        </a>
      </li><!-- End Contact Page Nav -->

      
      <!--<li class="nav-item">-->
      <!--  <a class="nav-link collapsed" href="index.php?uploaded_images">-->
      <!--    <i class="bi bi-card-list"></i>-->
      <!--    <span>Blog Images</span>-->
      <!--  </a>-->
      <!--</li>-->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?add_video">
          <i class="bi bi-card-list"></i>
          <span>Add Video</span>
        </a>
      </li>
           
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?manage_video_blogs">
          <i class="bi bi-card-list"></i>
          <span>Manage Video blogs</span>
        </a>
      </li>
      



    </ul>

  </aside><!-- End Sidebar-->


  <!--  main Section start from here -->

<?php

////////////////////////////////////////////////////////////////////////////////////////////

  if(isset($_GET['manage_blogs']))
  {

    // manage-blogs
    include('../includes/manage-blogs.php');
    // manage-blogs

  }


////////////////////////////////////////////////////////////////////////////////////////////

  if(isset($_GET['manage_video_blogs']))
  {

    // manage-blogs
    include('../includes/manage-video-blogs.php');
    // manage-blogs

  }




  ////////////////////////////////////////////////////////////////////////////////////////////

  elseif(isset($_GET['uploaded_images']))
  {

    // <!-- uploaded-images -->
        include('../includes/uploaded-images.php');
    // <!-- uploaded-images #main -->

  }


  //////////////////////////////////////////////////////////////////

  elseif(isset($_GET['cateogory']))
  {

    // <!-- cateogory -->
    include('../includes/category.php');
    // <!-- cateogory -->

  }

  
  //////////////////////////////////////////////////////////////////

  elseif(isset($_GET['career']))
  {

        // <!-- career -->
        include('../includes/career.php');
        // <!-- career -->
  
  }

  
  //////////////////////////////////////////////////////////////////

  elseif(isset($_GET['add_video']))
  {

        // <!-- career -->
        include('../includes/add-video.php');
        // <!-- career -->
  
  }

  
  //////////////////////////////////////////////////////////////////

  elseif(isset($_GET['edit_video_blogs_id']))
  {

    $id=$_GET['edit_video_blogs_id'];
    $query="SELECT * FROM videos WHERE id=$id";
    $fetch_post_data = mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($fetch_post_data);
    $video_blog_id = $data['id'];
    // $title = $data['title'];
    // // echo $title;

    ?>

    

      <main id="main" class="main">

      <div class="pagetitle mb-5">
            <h1>Edit Video Blog</h1>

            </nav>
          </div><!-- End Page Title -->

          <section class="section ">
          
          <div class="col-lg-12">
                      <section class="panel">

                  <div class="panel-body">
                    <div class="form">
                      <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                          <div class="col-sm-12 mb-3">
                            <label>Video Title</label>
                            <input type="text" class="form-control" name="video_title" value="<?php echo $data['title'];?>" required>
                          </div>
                          <div class="col-sm-12 mb-3">
                            <label>Description</label>
                            <textarea class="form-control " name="video_description" rows="6" ><?php echo $data['description'];?></textarea>
                          </div>
                        </div>
                          <div class="col-sm-12 mb-3">
                            <label>(url)</label>
                            <input type="text" class="form-control" name="video_url" value="<?php echo $data['url'];?>" required>
                          </div>
                        </div>
                          <div class="col-sm-12 mb-3">
                            <label>Ending words</label>
                            <input type="text" class="form-control" name="video_ending_lines" value="<?php echo $data['ending_lines'];?>" placeholder="Please enter few ending words (optional)">
                          </div>
                        </div>


                      </div>
                      
                        <input type="submit" name="update_video_blog" class="btn btn-primary" value="Publish">
                    </form>
                    </div>
                  </div>

                  </section>
              </div>
          
            </div>

        </div>
      </section>

      </main><!-- End #main -->


    <?php
  if(isset($_POST['update_video_blog'])){
  
    $video_title=mysqli_real_escape_string($db,$_POST['video_title']);
    $video_description=mysqli_real_escape_string($db,$_POST['video_description']);
    $video_url=mysqli_real_escape_string($db,$_POST['video_url']);
    $video_ending_lines=mysqli_real_escape_string($db,$_POST['video_ending_lines']);
  
    $sql="UPDATE `videos` SET `title`='$video_title',`description`='$video_description',`ending_lines`='$video_ending_lines',`url`='$video_url' WHERE `id` = '$video_blog_id'";


    $run = mysqli_query($db, $sql);

     if ($run) 
     {
        // echo "New record has been added successfully !";
        ?>
            <script>
                alert("Video Blog Updated Successfully.");
                window.location.href = "../admin/index.php?manage_video_blogs";
            </script>
        <?php
     } 
     else 
     {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
  }

  }




  //////////////////////////////////////////////////////////////////

  elseif(isset($_GET['id']))    // get id from update-post.php and displaying in inputboxes
  {
       //Posts table
       $id=$_GET['id'];
       $query="SELECT * FROM posts WHERE id=$id";
       $fetch_post_data = mysqli_query($db,$query);
       $data = mysqli_fetch_assoc($fetch_post_data);
       $ptitle = $data['title'];
       //echo"If working";

       //Posts table ends here


       //Image table
       
       $query1="SELECT * FROM images WHERE post_id=$id";
       $fetch_image_data = mysqli_query($db,$query1);
       $data_image = mysqli_fetch_assoc($fetch_image_data);
       // echo $data_image['id'];
       // echo $data_image['image'];

       //Image table ends here


       //Category table
       
       $query2="SELECT * FROM category WHERE post_id = $id";
       $fetch_categ_data = mysqli_query($db,$query2);
       $data_categ = mysqli_fetch_assoc($fetch_categ_data);
       // echo $data_categ['id'];
       // echo $data_categ['name'];

       //Image table ends here

    ?>

    <main id="main" class="main">

    <div class="pagetitle mb-5">
      <h1>Update Blog</h1>  

      </nav>
    </div><!-- End Page Title -->

    <section class="section ">
    
      <div class="col-lg-12">
                <section class="panel">

                  <div class="panel-body">
                    <div class="form">
                      <form action="../includes/update-post.php?id=$id" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">

                          <div class="col-sm-12 mb-3 d-none" >  <!--  Display none-->
                            <label>Post id</label>
                            <input type="text" class="form-control" value="<?php echo $data['id'];?>" name="post_id" >
                          </div>

                          <div class="col-sm-12 mb-3">
                            <label>Post Title</label>
                            <input type="text" class="form-control" value="<?php echo $data['title'];?>" name="post_title" required>
                          </div>
                          <div class="col-sm-12 mb-3">
                            <label>Slug(url)</label>
                            <input type="text" class="form-control" value="<?php echo $data['url'];?>" name="post_url" required>
                          </div>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-12 mb-3">
                            <label>About Blog</label>
                            <input type="text" class="form-control" value="<?php echo $data['about_blog'];?>"  name="about_blog" maxlength="100" required>
                          </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                          <label>Post Content</label>,
                            <textarea class="form-control ckeditor"  name="post_content" rows="6" ><?php echo $content_struct; ?></textarea>
                          </div>
                        </div>
                        
                          <!--<div class="col-sm-12 mb-3">-->
                          <!--  <label>Post Content</label>-->
                          <!--    <textarea class="form-control ckeditor" name="post_content" rows="6" ><?php echo $content_struct; ?></textarea>-->
                          <!--  </div>-->
                          <!--</div>-->

                        <div class="row">
                        <div class="form-group col-sm-6">       <!--  Category table inputs-->
                        
                              <div class="col-sm-12 mb-3 d-none" >  <!--  Display none-->
                                <label>Category id</label>
                                <input type="text" class="form-control" value="<?php echo $data_categ['id']; ?>" name="categ_id" >
                            </div>

                          <div class="col-sm-12 mb-3">
                            <label>Select Post Category</label>

                              <select name="post_category" class="form-control">
                                <?php
                                  $categories = getAllCategory($db);
                                  foreach($categories as $ct)
                                  {
                                ?>
                                    <option value="<?=$ct['id']?>"><?=$ct['name']?></option>
                                <?php
                                  } 
                                ?>

                              </select>
                          </div>
                        </div>
                          <div class="form-group col-sm-6">    <!--  Image Table inputs-->

                            <div class="col-sm-12 mb-3 d-none" >  <!--  Display none-->
                              <label>Image id</label>
                              <input type="text" class="form-control" value="<?php echo $data_image['id']; ?>" name="image_id" >
                            </div>

                            <div class="col-sm-12 mb-3 d-none" >  <!--  Display none-->
                              <label>Image name</label>
                              <input type="text" class="form-control" value="<?php echo $data_image['image']; ?>" name="image_name" >
                            </div>

                            <div class="col-sm-12">
                              <label>Upload Photos(max 5)</label>

                                <input type="file" class="form-control" value="<?php echo $data_image['image']; ?>" name="uploadfile" accept="image/*" >
                            </div>
                          </div>
                      </div>
                      
                        <input type="submit" name="updatepost" class="btn btn-primary" value="Update">
                    </form>
                    </div>
                  </div>


                  </section>
              </div>
           
            </div>

        </div>
      </section>
    </main>
    <?php

  }

  	////////////////////////////////////////////////////////////////////////

  else
  {   
        // <!-- create-blog -->
        include('../includes/create-blog.php');
        // <!-- create-blog -->
    }

    ?>






  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
<!-- Blog text editor control -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>