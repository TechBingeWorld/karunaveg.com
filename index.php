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
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/owl.css">
<!-- javacript animation cdn -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- javacript animation cdn ends here-->
</head>

<body>



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




<style>
  /* Reset */
*{margin:0;padding:0;}


/* banner */
#banner{
  width:100%;
  height:85vh;
  position:relative;
  overflow:hidden;

}
@keyframes load{
  from{left:-100%;}
  to{left:0;}
}
#banner .slides{
  width:400%;
  height:100%;
  position:relative;
  -webkit-animation:slide 12s infinite;
  -moz-animation:slide 12s infinite;
  animation:slide 12s infinite;
  
}
#banner .banner{
  width:25%;
  height:100%;
  float:left;
  position:relative;
  z-index:1;
  overflow:hidden;
}


#banner .slide img{
  width:100%;
  height:85vh;
  object-fit: fill;
  background-position: center;
  
}
/*#banner .slide img{*/
/*  width:100%;*/
/*  height:100%;*/
/*}*/
#banner .image{
  width:100%;
  height:100%;
  background-position: center;
  object-fit: cover;
}
#banner .image img{
  width:100%;
  height:85vh;
  object-fit: initial;
  background-position: center;
      

}

/* Legend */
#banner.legend{
  border:500px solid transparent;
  border-left:800px solid rgba(52, 73, 94, .7);
  border-bottom:0;
  position:absolute;
  bottom:0;
}

/* Contents */
#banner .content{
  display: none;
  width:100%;
  height:100%;
  position:absolute;
  overflow:hidden;
}
#banner .content-txt{
  width:400px;
  height:450px;
  float:left;
  position:relative;
  top:550px;
  -webkit-animation:content-s 7.5s infinite;
  -moz-animation:content-s 7.5s infinite;
  animation:content-s 7.5s infinite;
}
#banner .content-txt h1{
  font-family:Arial;
  text-transform:uppercase;
  font-size:24px;
  color:#fff;
  text-align:left;
  margin-left:30px;
  padding-bottom:10px;
}
#banner .content-txt h2{
  font-family:arial;
  font-weight:normal;
  font-size:14px;
  font-style:italic;
  color:#fff;
  text-align:left;
  margin-left:30px;
}

/* Switch */
.switch{
    display: none;
  width:120px;
  height:10px;
  position:absolute;
  bottom:50px;
  z-index:99;
  left:30px;
}
#banner .switch > ul{
  list-style:none;
}
#banner .switch > ul > li{
  width:10px;
  height:10px;
  border-radius:50%;
  background:#fff;
  float:left;
  margin-right:5px;
  cursor:pointer;
}
#banner .switch ul{
  overflow:hidden;
}
#banner .on{
  width:100%;
  height:100%;
  border-radius:50%;
  background:#f39c12;
  position:relative;
  -webkit-animation:on 7.5s infinite;
  -moz-animation:on 7.5s infinite;
  animation:on 7.5s infinite;
}

/* Animation */
@-webkit-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@-moz-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}

@-webkit-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@-moz-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@keyframes content-s{
  0%{left:-420px;}
  10%{left:20px;}
  15%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}

@-webkit-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@-moz-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

/* main */


@media (max-width: 768px) {
    
    
    #banner{
      width:100%;
      height:75vh;
      position:relative;
      overflow:hidden;
    }

    /* #banner .slide img{
      width:100%;
      height:65vh;
      object-fit: fill;
      background-position: center;
      
    } */

    #banner .image img{
      width:100%;
      height:65vh;
      object-fit: fill;
      background-position: center;
    }

    .mobile-view{
      display: block;
    
    }

    .desktop-view{
      display: none;
    }

}


</style>







<!-- Testing banners -->

<!-- Header -->


<!-- banner -->
<div id="banner" style="padding-top:80px">
  <div class="slides">
    <div class="banner ">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>Lorem ipsum dolor</h1>
          <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
        </div>
      </div>
       <div class="image desktop-view">
        <img src="assets/images/banner-1.jpeg">
      </div>
      <div class="image mobile-view" >
        <img src="assets/images/mobile_banner2.jpeg">
      </div>
    </div>
    <div class="banner">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>Lorem ipsum dolor</h1>
          <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
        </div>
      </div>
      <div class="image desktop-view">
        <img src="assets/images/banner-2.jpeg">
      </div>
      <div class="image mobile-view" >
        <img src="assets/images/mobile_banner1.jpeg">
      </div>
    </div>
    <div class="banner">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>Lorem ipsum dolor</h1>
          <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
        </div>
      </div>
      <div class="image desktop-view">
        <img src="assets/images/banner-1.jpeg">
      </div>
      <div class="image mobile-view" >
        <img src="assets/images/mobile_banner2.jpeg">
      </div>
    </div>
    <div class="banner">
      <div class="legend"></div>
      <div class="content">
        <div class="content-txt">
          <h1>Lorem ipsum dolor</h1>
          <h2>Nam ultrices pellentesque facilisis. In semper tellus mollis nisl pulvinar vitae vulputate lorem consequat. Fusce odio tortor, pretium sit amet auctor ut, ultrices vel nibh.</h2>
        </div>
      </div>
      <div class="image desktop-view">
        <img src="assets/images/banner-3.jpeg">
      </div>
      <div class="image mobile-view" >
        <img src="assets/images/mobile_banner4.jpeg">
      </div>
    </div>
  </div>
  <div class="switch">
    <ul>
      <li>
        <div class="on"></div>
      </li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
</div>


<!-- Testing banners ends here -->



















    <!-- Header ends here -->
   <!-- banner start -->
  
   <!-- bannner end -->

     <!-- Lord Karuna Veg Society start -->
     <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- <h4>Request a call back right now ?</h4> -->
            <span>Karuna Veg has been founded on pious roots of right doing and dharma, which are the core principles of Jainism. Jainism as a religion has always believed in promoting and teaching people to lead their lives in the right manner, to walk on the path of righteousness and to ensure that no harm is done ever to any form of life, be it knowingly or unknowingly.</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Lord Karuna Veg Society ends here -->


    <?php

  $query = "SELECT * FROM `posts` ORDER BY id DESC LIMIT $result,$post_per_page";
  $run = mysqli_query($db, $query);

  $num = mysqli_num_rows($run);

  if($num>0)
  { 
    ?>  
    <div class="services" id="post">
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
         <a class="post-item__inner" style="text-decoration:none; color:black" href="all-section.php?category_id=<?= $row['category_id']?>">
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
    <?php

}
else{
  echo "Please publish some blogs.";
}

?>




<!-- Top Ambassadors -->
<div class="container  ">
    <div class="ambesedors">
        <div class="section-heading text-start"  data-aos="fade-right" data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">
          <h2>Top <em>Ambassadors</em></h2>
          <!-- <h2>What we are doing?</h2> -->
        </div>
        <div class="row" data-aos="zoom-out-up" data-aos-easing="ease-out-cubic"
     data-aos-duration="1000" data-aos-offset="10">
          <div class="col-md-2 pb-4 col-sm-4 col-6 text-center">
          <img src="assets/images/messages-1.jpg" alt="testi2"><br>
            <h5>Banner Bruice</h5>
          </div>
          
          <div class="col-md-2 pb-4 col-sm-4 col-6 text-center">
          <img src="assets/images/messages-2.jpg" alt="testi2"><br>
            <h5>John Smith</h5>
          </div>
          
          <div class="col-md-2 pb-4 col-sm-4 col-6 text-center">
          <img src="assets/images/messages-3.jpg" alt="testi2"><br>
            <h5>Andrew Boom</h5>
          </div>

          <div class="col-md-6 text-center content" >
          <!-- <img src="assets/images/karunaveg-logo.png" class="logo" alt="testi2"><br> -->
            <h4>Become an Ambassador</h4><br>
            <p class="px-5">Lorem Ipsum ist einfach Dummy-Text der Druck- und Satzindustrie. Lorem Ipsum war der Standard der Branche Lorem Ipsum ist einfach Dummy-Text der Druck- und Satzindustrie. Lorem Ipsum war der Standard der Branche</p>
            <br>
            <button class="btn btn-sm btn-outline-success rounded-pill px-5" data-toggle="modal" data-target="#exampleModalCenter">Reach us</button>
          </div>
        </div>
    </div>
</div>
      <!-- Top Ambesedors ends here -->




 
 <!-- News Feed -->
 <div class="request-form" id="videos">
      <section class="container"  data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000" >
        <div class="section-heading">
          <!-- <h2>What people say.. <em>about us</em></h2> -->
          <h2 class="text-light" data-aos="fade-right" data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">News <em class="text-light">Feed</em></h2>
          <!-- <span>Lorem Ipsum war der Standard der Branche </span> -->
        </div>
            
          <div class="row" data-aos="fade-up" data-aos-offset="100" data-aos-duration="500" data-aos-easing="ease-in-sine">
          <?php
              $query = "SELECT * FROM `videos` ORDER BY `id` DESC LIMIT 6";
              $run = mysqli_query($db, $query);

              $num = mysqli_num_rows($run);

              if($num>0)
              { 
                while( $row = mysqli_fetch_assoc($run))
                {
                  // echo $row['title']."<br>";
                  // echo $row['content']."<br>"; 

            ?>
                  <div class="col-md-4 col-sm-6 col-6 mb-4">
                    <a href="video-blog-single.php?id=<?php echo $row['id']?>">
                        <div class="card h-100" >
                            <iframe class="embed-responsive-item" id="card-img-iframe" src="<?= $row['url']?>?&rel=0&modestbranding=1" allowfullscreen></iframe>
                        </div>
                    </a>
                  </div>

            <?php
                }
              }
            ?>
                      
            

          </div>
            
        </section>

    </div>
      <!-- News Feed ends here -->




 <!-- Karunaveg on social media -->
<div class="container" id="social-media-post">
  <div class="section-heading text-start" data-aos="fade-right" data-aos-easing="ease-out-cubic"
     data-aos-duration="1000">
    <h2>Karunaveg on <em>social media</em></h2>
    <!-- <h2>What we are doing?</h2> -->
  </div>
<!-- Gallery -->
<div class="row">
  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/nutrition1.jpeg"
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    /> 
  <figcaption>
        <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>

  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/nutrition2.jpeg"
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    />
  <figcaption>
        <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>

  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/Animal%20Cruelty3.jpeg"
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    />
  <figcaption>
        <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>
  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/Meat%20vs%20Disease.jpeg"
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    />
  <figcaption>
        <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>

  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/poultry3.jpeg"
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    />
  <figcaption>
        <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>

  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/animal%20cruelty-ff.jpeg  "
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    />
  <figcaption>
    <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>

  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/man-vs-anim.jpeg"
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    />
  <figcaption>
        <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>

  <div class="col-md-3 col-sm-6 col-6  " data-aos="zoom-in" data-aos-duration="700" data-aos-easing="ease-in-sine" data-aos-offset="100">
<figure class="hover-img">
  <img src="https://karunaveg.com/uploaded_images/brain-fogging.jpeg"
      class="w-100 shadow-1-strong "
      alt="Boat on Calm Water" style="height: 140px"
    />
  <figcaption>
        <span>@Lorem <br/>Ispansum</span>
  </figcaption>
</figure>
  </div>




</div>
<!-- Gallery -->
</div>



      

      <!-- Top Ambesedors ends here -->


      
<!-- FAQ -->

<?php
     include("includes/faq.php");
?>
<!-- FAQ ends here -->





  <!-- Introductry video-->
  <!-- <div class="" id="fullscreen-video">
    <section class="container p-0">
      <div class="section-heading" >
        <h2>What we are <em>doing?</em></h2>
      </div>

      <div class="col-12">
             <iframe  src="https://www.youtube.com/embed/Gmh_xMMJ2Pw?showinfo=0&controls=0&rel=0" title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

      </div>
          

    </section>

  </div> -->
    <!-- Introductry video ends here -->




    



    <!-- Testimonials  -->


    <style>

    </style>
    <section class="testimonials ">
    <div class="wrapper">
    <div class=" container">
        <div class="row" data-aos="fade-right" data-aos-easing="ease-out-cubic"
     data-aos-duration="500">
            <div class="col-12 section-heading text-centers" >
              <h2 class="text-light">What people says..</h2>
              <!-- <span>Lorem Ipsum war der Standard der Branche </span> -->
            </div>

           <div data-aos="zoom-out-up" data-aos-easing="ease-out-cubic"
     data-aos-duration="1000" data-aos-offset="10">
           <div class="col-12 slide-control ">
                <a class="btn prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a class="btn next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner">
                      <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                  <div class="testimonial-item">
                                    <div class="inner-content">
                                      <img src="assets/images/messages-1.jpg" alt="testi2"><br>
                                      <h4>John Smith</h4>
                                      <!-- <span>Market Specialist</span> -->
                                      <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                                    </div>   
                                  </div>
                                </div>

                                <div class="col-md-6  mb-3 hide-in-mobile">
                                  <div class="testimonial-item">
                                    <div class="inner-content">
                                      <img src="assets/images/messages-2.jpg" alt="testi2"><br>
                                      <h4>Banner Bruice</h4>
                                      <!-- <span>Market Specialist</span> -->
                                      <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                                    </div>   
                                  </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-6 mb-3">
                                  <div class="testimonial-item">
                                    <div class="inner-content">
                                      <img src="assets/images/profile-img.jpg" alt="testi2"><br>
                                      <h4>Chris Evans</h4>
                                      <!-- <span>Market Specialist</span> -->
                                      <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                                    </div>   
                                  </div>
                                </div>

                                <div class="col-md-6 mb-3 hide-in-mobile">
                                  <div class="testimonial-item">
                                    <div class="inner-content">
                                      <img src="assets/images/messages-3.jpg" alt="testi2"><br>
                                      <h4>John Smith</h4>
                                      <!-- <span>Market Specialist</span> -->
                                      <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                                    </div>   
                                  </div>
                                </div>


                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                            <div class="col-md-6 mb-3">
                                  <div class="testimonial-item">
                                    <div class="inner-content">
                                      <img src="assets/images/messages-2.jpg" alt="testi2"><br>
                                      <h4>Andrew Boom</h4>
                                      <!-- <span>Market Specialist</span> -->
                                      <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                                    </div>   
                                  </div>
                                </div>

                                <div class="col-md-6 mb-3 hide-in-mobile">
                                  <div class="testimonial-item">
                                    <div class="inner-content">
                                      <img src="assets/images/profile-img.jpg" alt="testi2"><br>
                                      <h4>John Smith</h4>
                                      <!-- <span>Market Specialist</span> -->
                                      <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                                    </div>   
                                  </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           </div>
        </div>
    </div>
        <ul class="bg-bubbles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
             </section>
    

  <!-- Testimonials ends here -->





    
    <?php 
      // include('includes/recently_added_blogs.php');

      // include('includes/featured_blogs.php');

      //<!-- Footer Starts Here -->
      include('includes/footer.php');
    ?>




<!-- MOdal for join us and amabes.-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 99999">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-light" >
        <h5 class="modal-title" id="exampleModalCenterTitle">Reach us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Full Name</label>
            <input type="text" class="form-control" name="full_name" id="full_name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mobile no.</label>
            <input type="text" class="form-control" name="mobile" id="mobile">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message</label>
            <textarea class="form-control" name="message" id="message"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>

    

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

<!-- Animation Javascript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<!-- Animation Javascript -->

  </body>
</html>