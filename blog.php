<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Karuna veg</title>
    <!-- Bootstrap core CSS -->
    <link rel="icon" href="img/favicon1.png" type="image/png" />
    <title>Karunaveg</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!-- main css -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="assets/css/Blog-style.css" />
    <!-- <link rel="stylesheet" href="css/responsive.css" /> -->
    <style>
        
        
        @media (max-width: 768px) {
            .single-services .tabs-content #tabs-1 img{
                height: 160px;
            }
       
        }

    </style>
    
  </head>

  <body >

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

   
    <!-- Header  -->
    <?php
        require('includes/db.php');
        include('includes/function.php');
        include('includes/header.php');

        if(isset($_GET['page'])){
          $page=$_GET['page'];
        }else{
          $page=1;
        }
        $post_per_page=9;
        $result=($page-1)*$post_per_page;
    ?>

    <!-- Header ends here -->

 <!--================Home Banner Area =================-->
 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container-fluid col-11">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Blogs</h2>
              <p>Read Latest Blogs by Karunaveg</p>
            </div>
            <div class="page_link">
              <a href="index.php">Home</a>
              <a href="blog.php">Blog </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area " style="zoom:90%">
      <div class="container-fluid col-11">
          <div class="row">
              <div class="col-lg-9 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">


                  <!-- Blogs based on category -->
                  <?php
                   $category_id = $_GET['category_id'];

                  if($category_id)
                  {
 
                    $query = "SELECT * FROM `posts` WHERE `category_id` = '$category_id' ";
                    $run = mysqli_query($db, $query);

                     //Checking if row no. of rows found --> found run below code else --> skip
                    $num = mysqli_num_rows($run);

                     if($num > 0)
                     {
                       $row = mysqli_fetch_assoc($run);
                        ?>
      
                        <div class="main_title2 mb-4 p-2 d-flex justify-content-start">
                              <h3><span class="text-capitalize text-light"><?php echo  $row['title']?> </span></h3>
                        </div>

                        <?php
                        
                          $query = "SELECT * FROM `posts` WHERE `category_id` = '$category_id' ";
                          $run = mysqli_query($db, $query);

                          while($row = mysqli_fetch_assoc($run))
                          {
                            ?>
                              <a href="posts.php?id=<?php echo $row['id']?>">

                            <article class="blog_item shadow-sm">
                                <div class="blog_item_img">
                                <?php 
                                    $getImageid = $row['id'];

                                    $query_img = "SELECT * FROM `images` WHERE `post_id` = '$getImageid' ";
                                    $fetch_img = mysqli_query($db, $query_img);

                                    $res_img = mysqli_fetch_assoc($fetch_img);  
                                  ?> 

                                  <div class="card-img" >
                                      <img src="uploaded_images/<?= getPostThumb($db,$row['id'])?>" id="blog-img" class="card-img-top"  alt="<?php
                                        $alt= str_replace(' ', '-', ( $row['title']));
                                        echo$alt?>">      <!--  Important....--> 
                                  </div>

                                  <a href="#" class="blog_item_date">
                                    <h3>
                                      <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                        <?= date('jS',strtotime($row['created_at']))?>
                                      </time>
                                    </h3> 

                                    <p class="fs-3 text-light">
                                      <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                        <?= date('F, Y',strtotime($row['created_at']))?>
                                      </time>
                                    </p>
                                  </a>

                                  
                                </div>
                                
                                <div class="blog_details">
                                    <a class="d-inline-block" href="video-blog-single.php?id=<?php echo $row['id']?>">
                                        <h2><?php echo $row['title'] ?></h2>
                                    </a>
                                    <p> <?php echo $row['about_blog'] ?> ... </p>




                                    <ul class="blog-info-link">
                                        <?php
                                          $category_id = $row['category_id'];

                                          $sql = "SELECT * FROM `category` WHERE `id` = '$category_id' ";
                                          $fetch = mysqli_query($db, $sql);

                                          $res = mysqli_fetch_assoc($fetch);  
                                        ?>    
                                      <li><a href="#"><i class="fa fa-home"></i><?php echo $res['name'] ?></a></li>




                                      <?php
                                          $getComment_id = $row['id'];

                                          $sql_comment = "SELECT * FROM `comments` WHERE `post_id` = '$getComment_id' ";
                                          $fetch_comment = mysqli_query($db, $sql_comment);

                                          $res_comment = mysqli_num_rows($fetch_comment);  
                                          
                                          if($res_comment > 0 )
                                          {
                                            // echo $res_comment;
                                        ?>  
                                          <li><a href="#"><i class="fa fa-comments"></i> 0 <?php echo $res_comment ?> Comments</a></li>
                                        <?php
                                          } 
                                        ?>
                                          <li><a href="#"> <i class="fa fa-share1"></i>Share it on &nbsp </a>    
                                            <a href="https://www.facebook.com/sharer.php?u=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-facebook "></i> </a>   
                                            <a href="#"><i class="fa fa-instagram "></i> </a>    
                                            <a href="https://www.linkedin.com/shareArticle?url=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-linkedin "></i> </a>   
                                            <a href="https://twitter.com/intent/tweet?url=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-twitter "></i> </a>
                                          </li>

                                        



                                    </ul>
                                </div>
                              
                            </article>
                            </a>

                            <?php
                          }
                      ?>

                        <div class="main_title2 mb-4 p-2  d-flex justify-content-start">
                            <h4><span class="text-capitalize text-light">Other Related Videos </span></h4>
                        </div>

                <?php
                     }

                  }
                  ?>


                      <!-- Other  realted Blogs -->
                      <?php

                        $query = "SELECT * FROM `posts` ORDER BY RAND()";
                        $run = mysqli_query($db, $query);

                        $num = mysqli_num_rows($run);

                        if($num>0)
                        { 
                          while( $row = mysqli_fetch_assoc($run))
                          {
                            // echo $row['title']."<br>";
                            // echo $row['content']."<br>"; 

                            ?>
                          <article class="blog_item shadow-sm">
                            <a href="post.php?id=<?php echo $row['id']?>">
                              <div class="blog_item_img">
                              <?php 
                                  $getImageid = $row['id'];

                                  $query_img = "SELECT * FROM `images` WHERE `post_id` = '$getImageid' ";
                                  $fetch_img = mysqli_query($db, $query_img);

                                  $res_img = mysqli_fetch_assoc($fetch_img);  
                                ?> 
                              <img src="uploaded_images/<?php echo $res_img['image']; ?>" id="blog-img" class="card-img-top"  alt="<?php
                                  $alt= str_replace(' ', '-', ( $res_img['image'])); echo$alt?>" >  

                                <a href="#" class="blog_item_date">
                                <h3>
                                  <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                    <?= date('jS',strtotime($row['created_at']))?>
                                  </time>
                                </h3> 

                                <p class="fs-3 text-light">
                                  <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                    <?= date('F, Y',strtotime($row['created_at']))?>
                                  </time>
                                </p>
                               

                                </a>
                              </div>
                              
                              <div class="blog_details">
                                  <a class="d-inline-block" href="#">
                                      <h2><?php echo $row['title'] ?></h2>
                                  </a>
                                  <p> <?php echo $row['about_blog'] ?> ... </p>



  
                                  <ul class="blog-info-link">
                                      <?php
                                        $category_id = $row['category_id'];

                                        $sql = "SELECT * FROM `category` WHERE `id` = '$category_id' ";
                                        $fetch = mysqli_query($db, $sql);

                                        $res = mysqli_fetch_assoc($fetch);  
                                      ?>    
                                    <li><a href="#"><i class="fa fa-home"></i><?php echo $res['name'] ?></a></li>




                                    <?php
                                        $getComment_id = $row['id'];

                                        $sql_comment = "SELECT * FROM `comments` WHERE `post_id` = '$getComment_id' ";
                                        $fetch_comment = mysqli_query($db, $sql_comment);

                                        $res_comment = mysqli_num_rows($fetch_comment);  
                                        
                                        if($res_comment > 0 )
                                        {
                                          // echo $res_comment;
                                      ?>  
                                        <li><a href="#"><i class="fa fa-comments"></i> 0 <?php echo $res_comment ?> Comments</a></li>
                                      <?php
                                        } 
                                      ?>
                                        <li><a href="#"> <i class="fa fa-share1"></i>Share it on &nbsp </a>    
                                          <a href="https://www.facebook.com/sharer.php?u=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-facebook "></i> </a>   
                                          <a href="#"><i class="fa fa-instagram "></i> </a>    
                                          <a href="https://www.linkedin.com/shareArticle?url=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-linkedin "></i> </a>   
                                          <a href="https://twitter.com/intent/tweet?url=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-twitter "></i> </a>
                                        </li>

                                      



                                  </ul>
                              </div>
                            </a>
                           </article>
                        <?php 
                              }

                            }     
                            else
                            {
                              echo "Please publish some blogs.";
                            }
                          ?>


                      <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-left"></span>
                                      </span>
                                  </a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">1</a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">2</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <span class="ti-arrow-right"></span>
                                      </span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>

<!-- ------------------------------------------------------------------ -->
<!-- Right bar -->
<!-- ------------------------------------------------------------------ -->


              <div class="col-lg-3">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="ti-search"></i></button>
                                </div>
                              </div>
                            </div>
                            <button class="main_btn rounded-0 w-100" type="submit">Search</button>
                          </form>
                      </aside>

                      <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Categories</h4>

                          <?php

                          $query = "SELECT * FROM `category` ORDER BY RAND() DESC ";
                          $run = mysqli_query($db, $query);

                          while($row = mysqli_fetch_assoc($run))
                          {
                          ?>

                            <ul class="list cat-list">
                                <li>
                                    <a href="blog.php?category_id=<?= $row['id']?>" class="d-flex">
                                        <p><?php echo $row['name'] ?></p>
                                        <!-- <p>(37)</p> -->
                                        <hr>
                                    </a>
                                </li>
                            </ul>
                          
                          <?php
                          }
                          ?>
                      </aside>



                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Latest Videos</h3>
                          <?php
                          $query = "SELECT * FROM `videos` ORDER BY RAND() LIMIT 4";
                          $run = mysqli_query($db, $query);
                          
                          while($row = mysqli_fetch_assoc($run))
                          {
                          ?>
                          <div class="media post_item">
                            <div class="card-iframe">
                              <iframe class="embed-responsive-item" id="card-img-iframe" src="<?= $row['url']?>?rel=0&modestbranding=1" style="width: 60px; height: 40px" allowfullscreen></iframe>
                            </div>
                              <!-- <img src="img/blog/popular-post/post1.jpg" alt="post"> -->
                              <div class="media-body">
                                  <a href="video-blog-single.php?id=<?php echo $row['id']?>">
                                      <h3 class="text-truncate" style="width: 180px"><?php echo $row['title'] ?></h3>
                                  </a>
                                  <p>
                                    <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                      <?= date('F jS, Y',strtotime($row['created_at']))?>
                                    </time>
                                  </p>
                              </div>
                          </div>
                          <?php
                          }
                          ?>
            
                      </aside>
                      <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                              <li>
                                  <a href="#">project</a>
                              </li>
                              <li>
                                  <a href="#">love</a>
                              </li>
                              <li>
                                  <a href="#">technology</a>
                              </li>
                              <li>
                                  <a href="#">travel</a>
                              </li>
                              <li>
                                  <a href="#">restaurant</a>
                              </li>
                              <li>
                                  <a href="#">life style</a>
                              </li>
                              <li>
                                  <a href="#">design</a>
                              </li>
                              <li>
                                  <a href="#">illustration</a>
                              </li>
                          </ul>
                      </aside> -->


                      <!-- <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                  <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                                </a>
                            </li>
                        </ul>
                      </aside> -->


                      <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" required>
                          </div>
                          <button class="main_btn rounded-0 w-100" type="submit">Subscribe</button>
                        </form>
                      </aside>

                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- Footer Starts Here -->
 

    <?php 
      include('includes/footer.php');
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>