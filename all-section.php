<?php
    $category_id = $_GET['category_id'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
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

  
  </head>

  <body >
  <!--================Header Menu Area =================-->
   
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
  <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <!-- <section class="banner_area mt-5">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Blog</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="blog.html">Blog </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--================End Home Banner Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area section_gap mb-5" style="zoom:90%">
      <div class="container-fluid col-11 ">
          <div class="row">
              <div class="col-lg-9">

              
                                                    
              <?php

                  $query = "SELECT * FROM `e_books` WHERE `category_id` = '$category_id' ORDER BY id DESC LIMIT $result,$post_per_page";
                  $run = mysqli_query($db, $query);

                  $num = mysqli_num_rows($run);

                  if($num>0)
                  { 
                    ?>  

                  <div class="main_title text-start pb-3 d-flex justify-content-between">
                          <h2><span class="text-capitalize">E-Books </span></h2>
                          <!-- <h6 class="pt-4">Bring called seed first of third give itself now ment</h6>--> 
                          <!-- <a href="all-E-books.php?category_id=<?php echo $category_id?>"><button class="btn">View all</button></a> -->
                          <a href="all-E-books.php"><button class="btn">View all</button></a>
                  </div>
                  <div class="line mb-4"></div>   <!--Break  line -->

                  <div class="blog_left_sidebar">
                              
                  <article class="blog_item">

                      
                            <div class="" id="">
                              <div class="container ">
                                <div class="row ">
                                  <!-- <div class="col-md-12">
                                    <div class="section-heading">
                                      
                                      <h2>Our <em>Blogs</em></h2>

                                    </div>
                                  </div> -->

                                
                                  <?php
                            while( $row = mysqli_fetch_assoc($run))
                            {
                                //  echo $row['id'];
                              // echo $row['title']."<br>";
                              // echo $row['content']."<br>"; 
                            

                              ?>
                                  <div class="col-md-3 col-sm-6 col-xs-12 col-6 ">
                                <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" >
                                <!-- <div > -->
                                <a class="post-item__inner" style="text-decoration:none; color:black" href="karunaveg-read-ebook.php?ebookid=<?= $row['id']?>">
                                    <div class="card service-item mb-3">

                                          <div class="down-content">

                                                  <div class="card-img" >
                                                      <img src="assets/images/ebook.png" id="ebook_img" class="card-img-top container-fluid"  alt="<?php
                                                      $alt= str_replace(' ', '-', ( $row['title']));
                                                      echo$alt?>">      <!--  Important....--> 
                                                  </div>

                                              <!-- <span class="text-truncated pt-2"> <?php// echo $row['about_blog']; ?></span> -->
                                              <br>
                                              <h3><?php echo $row['title'] ?></h3>
                                              <div class="d-flex pt-3">
                                                  <label class="published_on "> Published on  
                                                      <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                                          <?= date('F jS, Y',strtotime($row['created_at']))?>
                                                      </time> 
                                                  </label>
                                              </div>

                                          </div>

                                          
                                          <!-- <div class="car  d-btn" > -->
                                            <!-- <a href="post.php?id=<?= $row['id']?>" class="filled-button text-center m-3">Read More</a> -->
                                          <!-- </div> -->
                                    </div>
                                  </a>
                                </div>

                                    <br>
                                  </div>

                                  <?php
                              }
                              ?>  
                                </div>
                              </div>
                            </div>
                           

                        </article>                    


                    </div>
                    <?php

                    }

                    else
                    {
                      // echo "Please publish some blogs.";
                    }

                    ?>


                  <!-- --------------------------------------------------------------- -->
                  <!-- Articles -->
                  <!-- --------------------------------------------------------------- -->

                  <?php

                    $query = "SELECT * FROM `posts` WHERE `category_id` = '$category_id' ORDER BY id DESC LIMIT $result,$post_per_page";
                    $run = mysqli_query($db, $query);

                    $num = mysqli_num_rows($run);

                    if($num>0)
                    { 
                      ?>
                            
                  <div class="main_title text-start pb-3 d-flex justify-content-between">
                          <h2><span class="text-capitalize">Blogs </span></h2>
                          <a href="blog.php?category_id=<?php echo $category_id?>"><button class="btn">View all</button></a>
                  </div>
                  <div class="line mb-4"></div>

                  <div class="blog_left_sidebar">
                              
                    <article class="blog_item">

                      
                            <div class="" id="">
                              <div class="container ">
                                <div class="row ">
                                  <!-- <div class="col-md-12">
                                    <div class="section-heading">
                                      
                                      <h2>Our <em>Blogs</em></h2>

                                    </div>
                                  </div> -->

                                
                                  <?php
                            while( $row = mysqli_fetch_assoc($run))
                            {
                                //  echo $row['id'];
                              // echo $row['title']."<br>";
                              // echo $row['content']."<br>"; 
                            

                              ?>
                                  <div class="col-md-4 col-sm-6 col-xs-12 col-6 ">
                                <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" >
                                <!-- <div > -->
                                <a class="post-item__inner" style="text-decoration:none; color:black" href="post.php?id=<?= $row['id']?>">
                                    <div class="card service-item mb-3">

                                          <div class="down-content">

                                                  <h4><?php echo $row['title'] ?></h4>

                                                  <div class="card-img" >
                                                      <img src="uploaded_images/<?= getPostThumb($db,$row['id'])?>" id="blog-img" class="card-img-top"  alt="<?php
                                                        $alt= str_replace(' ', '-', ( $row['title']));
                                                        echo$alt?>">      <!--  Important....--> 
                                                  </div>

                                              <!-- <span class="text-truncated pt-2"> <?php// echo $row['about_blog']; ?></span> -->
                                              <label class="card-content"> <?php echo $row['about_blog']; ?>...</label>

                                              <div class="d-flex ">
                                                <label class="published_on mt-3"> Published on  
                                                    <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                                      <?= date('F jS, Y',strtotime($row['created_at']))?>
                                                    </time>
                                                </label>
                                              </div>

                                          </div>

                                          
                                          <!-- <div class="car  d-btn" > -->
                                            <!-- <a href="post.php?id=<?= $row['id']?>" class="filled-button text-center m-3">Read More</a> -->
                                          <!-- </div> -->
                                    </div>
                                  </a>
                                </div>

                                    <br>
                                  </div>

                                  <?php
                              }
                              ?>  
                                </div>
                              </div>
                            </div>
                           

                        </article>                    
                      </div>

                      <?php
                          }
                          
                          else
                          {
                            // echo "Please publish some blogs.";
                          }

                      ?>
                  <!-- --------------------------------------------------------------- -->
                  <!-- Videos -->
                  <!-- --------------------------------------------------------------- -->

                  <?php

                    $query = "SELECT * FROM `videos` WHERE `category_id` = '$category_id' ORDER BY id DESC ";
                    $run = mysqli_query($db, $query);

                    $num = mysqli_num_rows($run);

                    if($num>0)
                    { 
                        ?>
                  <div class="main_title text-start pb-3 d-flex justify-content-between">
                          <h2><span class="text-capitalize">Videos </span></h2>
                          <a href="videos.php?category_id=<?php echo $category_id?>"><button class="btn">View all</button></a>

                  </div>
                  <div class="line mb-4"></div>

                  <div class="blog_left_sidebar">
                              
                    <article class="blog_item">

                       
                        <div class="" id="video_blog_sec">
                          <div class="container ">
                            <div class="row ">

                              <?php
                        while( $row = mysqli_fetch_assoc($run))
                        {

                          ?>
                              <div class="col-md-4 col-sm-6 col-xs-12 col-6 ">
                            <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" >
                            <!-- <div > -->
                            <a class="post-item__inner" style="text-decoration:none; color:black" href="video-blog-single.php?id=<?= $row['id']?>">
                                <div class="card service-item mb-3">

                                      <div class="down-content">

                                              <div class="card-iframe">

                                                    <iframe class="embed-responsive-item" id="card-img-iframe" src="<?= $row['url']?>?rel=0&modestbranding=1" allowfullscreen></iframe>

                                              </div>

                                          <!-- <span class="text-truncated pt-2"> <?php// echo $row['about_blog']; ?></span> -->
                                          
                                          <h4><?php echo $row['title'] ?></h4>

                                          <div class="d-flex ">
                                            <label class="published_on mt-3"> Published on  
                                                <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                                                  <?= date('F jS, Y',strtotime($row['created_at']))?>
                                                </time>
                                            </label>
                                          </div>

                                      </div>

                                </div>
                              </a>
                            </div>

                                <br>
                              </div>

                              <?php
                          }
                          ?>  
                            </div>
                          </div>
                        </div>
                        

                  </article>                    
                </div>
                <?php

                  }
                  else{
                    // echo "Please publish some blogs.";
                  }

                  ?>

              </div>
              
      <!-- --------------------------------------------------------------- -->
      <!-- Videos  ends here-->
      <!-- --------------------------------------------------------------- -->

  
      <!-- --------------------------------------------------------------- -->
      <!-- RIght Sidebar -->
      <!-- --------------------------------------------------------------- -->


              <div class="col-lg-3">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Keyword">
                                <div class="input-group-append">
                                  <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
                            </div>
                            <button class="main_btn rounded-0 w-100" type="submit">Search</button>
                          </form>
                      </aside>

                      <aside class="single_sidebar_widget search_widget" id="social_icons">
                      <h4 class="widget_title">Follow us on</h4>
                          <div class="d-flex justify-content-inline" >
                             <!-- <a href="#"><i class="fa fa-share1"></i>Follow us on  </a> -->
                             <a href="https://www.facebook.com/sharer.php?u=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-facebook "></i> </a>   
                                &nbsp &nbsp &nbsp<a href="#"><i class="fa fa-instagram "></i> </a>    
                                &nbsp &nbsp &nbsp<a href="https://www.linkedin.com/shareArticle?url=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-linkedin "></i> </a>   
                                &nbsp &nbsp &nbsp<a href="https://twitter.com/intent/tweet?url=http://localhost/www/Tech%20Binge/karuna-veg/post.php?id=<?php echo $row['id']?>"><i class="fa fa-twitter "></i> </a>
                                &nbsp &nbsp &nbsp<a href=""><i class="fa fa-youtube "></i> </a>
                              
                          </div>
                      </aside>

                      
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Other Categories</h4>

                      <?php

                      $query = "SELECT * FROM `category` ORDER BY RAND() DESC ";
                      $run = mysqli_query($db, $query);

                      while($row = mysqli_fetch_assoc($run))
                      {
                      ?>

                        <ul class="list cat-list">
                            <li>
                                <a href="all-section.php?category_id=<?= $row['id']?>" class="d-flex">
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

                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email" required>
                          </div>
                          <button class="main_btn rounded-0 w-100" type="submit">Subscribe</button>
                        </form>
                      </aside>
                      

                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                      <?php
                          while($row = mysqli_fetch_assoc($run))
                      {
                      ?>

                          <div class="media post_item">
                              <img src="img/blog/popular-post/post1.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>From life was you fish... </h3>
                                  </a>
                                  <p>January 12, 2019</p>
                              </div>
                          </div>
                        <?php
                        }
                        ?>
                         
                          </div>       

                   </div>
              </div>
          </div>

          
  
      <!-- --------------------------------------------------------------- -->
      <!-- RIght Sidebar ends here -->
      <!-- --------------------------------------------------------------- -->


      </div>
  </section>
  <!--================Blog Area =================-->

  <!--================Header Menu Area =================-->
  <?php    include('includes/footer.php'); ?>
  <!--================Header Menu Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>