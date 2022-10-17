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

  <body style="zoom:80%">
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
    <section class="   ">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>E-Books</h2>
              <p>Very us move be blessed multiply night</p>
            </div>
            <div class="page_link">
              <a href="index.html">Home</a>
              <a href="blog.html">E-Books </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area section_gap ">
      <div class="container-fluid col-11 ">
          <div class="row">

             
              <div class="col-lg-9">

                  <!-- ------------------------------------------------------------ -->
                  <!-- ategory Selected E-books -->
                  <!-- -------------------------------------------->
                <?php
                if($_GET['id'])
                {
                    $selected_category_id = $_GET['id'];
                ?>
                          <div class="main_title text-start pb-4 d-flex justify-content-between">
                                  <h2><span class="text-capitalize">E-Books </span></h2>
                                  <h2><span class="text-capitalize"> View All</span></h2>
                                  <!-- <h6 class="pt-4">Bring called seed first of third give itself now ment</h6>--> 
                          </div>
                          <div class="line mb-4"></div>

                          <div class="blog_left_sidebar">
                                      
                              <article class="blog_item">

                                <div class="row">

                                                            
                                  <?php

                                    $query = "SELECT * FROM `e_books` WHERE `category_id` = '$selected_category_id' ";
                                    $run = mysqli_query($db, $query);

                                    $num = mysqli_num_rows($run);

                                    if($num>0)
                                    { 
                                      ?>  

                                      <div class="" id="">  
                                        <div class="container ">
                                          <div class="row ">
                                                
                                            <?php
                                                while( $row = mysqli_fetch_assoc($run))
                                                {
                                                    //  echo $row['id'];

                                                ?>

                                                <div class="col-md-3 col-sm-6 col-xs-12 col-6 ">
                                                <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" >
                                                <!-- <div > -->
                                                <a class="post-item__inner" style="text-decoration:none; color:black" href="karunaveg-read-ebook.php?ebookid=<?= $row['id']?>">
                                                    <div class="card service-item mb-3">

                                                            <div class="down-content">

 

                                                                    <div class="card-img" >
                                                                        <img src="assets/images/ebook.png" id="blog-img" class="card-img-top"  alt="<?php
                                                                        $alt= str_replace(' ', '-', ( $row['title']));
                                                                        echo$alt?>">      <!--  Important....--> 
                                                                    </div>

                                                                <!-- <span class="text-truncated pt-2"> <?php// echo $row['about_blog']; ?></span> -->
                                                                <!-- <label class="card-content"> <?php echo $row['about_blog']; ?>...</label> -->
                                                                <br>    
                                                                <h4><?php echo $row['title'] ?></h4>
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
                                      <?php

                                    }
                                    else{
                                    echo "Please publish some blogs.";
                                    }

                                    ?>

                                </div>
                              </article>
                          </div>
                  <?php
                    }
                  ?>

                  <!-- ------------------------------------------------------------ -->
                  <!-- All Other related E-Books -->
                  <!-- ------------------------------------------------- -->

                  <div class="main_title text-start pb-2 d-flex justify-content-between">
                                  <h2><span class="text-capitalize">E-Books </span></h2>
                                  <h2><span class="text-capitalize"> View All </span></h2>
                  </div>
                  <div class="line mb-4"></div>

                  <div class="blog_left_sidebar">
                              
                      <article class="blog_item">

                        <div class="row">

                                                    
                          <?php

                            $query = "SELECT * FROM `e_books` ORDER BY id DESC LIMIT $result,$post_per_page";
                            $run = mysqli_query($db, $query);

                            $num = mysqli_num_rows($run);

                            if($num>0)
                            { 
                              ?>  

                              <div class="" id="">  
                                <div class="container ">
                                  <div class="row ">
                                        
                                    <?php
                                        while( $row = mysqli_fetch_assoc($run))
                                        { 
                                            //  echo $row['id'];

                                        ?>

                                        <div class="col-12 ">
                                        <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" >
                                        <!-- <div > -->
                                        <a class="post-item__inner" style="text-decoration:none; color:black" href="karunaveg-read-ebook.php?ebookid=<?= $row['id']?>">
                                            <div class="card service-item mb-3">

                                                    <div class="down-content">



                                                            <div class="card-img" >
                                                                <img src="assets/images/ebook.png" id="blog-img" class="card-img-top"  alt="<?php
                                                                $alt= str_replace(' ', '-', ( $row['title']));
                                                                echo$alt?>">      <!--  Important....--> 
                                                            </div>

                                                        <!-- <span class="text-truncated pt-2"> <?php// echo $row['about_blog']; ?></span> -->
                                                        <!-- <label class="card-content"> <?php echo $row['about_blog']; ?>...</label> -->
                                                        <br>    
                                                        <h4><?php echo $row['title'] ?></h4>
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
                              <?php

                            }
                            else{
                            echo "Please publish some blogs.";
                            }

                            ?>

                        </div>
                      </article>
                  </div>

                  <!-- ------------------------------------------------------------ -->
                  <!-- All Other related E-Books ends here-->
                  <!-- ------------------------------------------- -->

              </div>


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
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                          <?php
                              // id = $_GET['id'];
                              $query = "SELECT * FROM category ORDER BY id DESC";
                              $run = mysqli_query($db, $query);

                              while($row = mysqli_fetch_assoc($run))
                              {
                          ?>
                            <li>
                                <a href="#" class="d-flex">
                                    <p><?php echo $row['name']?></p>
                                    <p>(37)</p>
                                </a>
                            </li>
                              <?php
                              }
                              ?>

                            
                        </ul>
                      </aside>

                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Recent Post</h3>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post1.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>From life was you fish...</h3>
                                  </a>
                                  <p>January 12, 2019</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post2.jpg" alt="post">                              
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>The Amazing Hubble</h3>
                                  </a>
                                  <p>02 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post3.jpg" alt="post">                              
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Astronomy Or Astrology</h3>
                                  </a>
                                  <p>03 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post4.jpg" alt="post">
                              <div class="media-body">
                                  <a href="single-blog.html">
                                      <h3>Asteroids telescope</h3>
                                  </a>
                                  <p>01 Hours ago</p>
                              </div>
                          </div>
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

                    <aside class="single_sidebar_widget newsletter_widget">

                              <div class="down-content ">
                          <h4>Make Donation</h4>
                          <!-- <div style="margin-bottom:10px;">
                            <span> <sup>$</sup>300.00 - <sup>$</sup>400.00 </span>
                          </div> -->

                          <!-- <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p> -->
                          <form class="row g-3">
                            <div class="col-md-12 ">
                              <label for="inputCity" class="form-label">Name</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-12 ">
                              <label for="inputCity" class="form-label">Mobile no.</label>
                              <input type="text" class="form-control" id="inputCity">
                            </div>
                            
                            <div class="col-md-12 ">
                              <label for="inputEmail4" class="form-label">Email</label>
                              <input type="email" class="form-control" id="inputEmail4">
                            </div>

                            <div class="col-md-12 ">
                              <label for="inputState" class="form-label">Amount</label>
                              <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Amout</option>
                                <option value="500">₹ 500/-</option>
                                <option value="1000">₹ 1000/-</option>
                                <option value="2000">₹ 2000/-</option>
                                <option value="5000">₹ 5000/-</option>
                              </select>
                            </div>
                            
                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                            </div><br><br>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Donate</button>
                            </div>
                          </form>

                          <!-- <a href="package-details.html" class="filled-button">View More</a> -->
                        </div>
                      </div>

                    </aside>
                  </div>

         


          </div>
      </div>
  </section>
  <!--================Blog Area =================-->

  <!--================Header Menu Area =================-->
  <?php    include('includes/footer.php'); ?>
  <!--================Header Menu Area =================-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
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