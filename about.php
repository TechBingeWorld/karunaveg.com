<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Karuna veg</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/fav-icon.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

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



    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <!-- <span>Lorem ipsum dolor sit amet</span> -->
                    <h2>Who we <em>Are?</em></h2>
                    <p>We are a philanthropic creature government assistance association attempting to make a protected and sound world for each creature, and for individuals who love them.
                      AMTM is hanging around for each creature out of luck, and has been beginning around 2010. We accept that each creature merits the best. That is the reason we are devoted to the salvage and restoration of stray and deserted creatures - we accept we can change their personal satisfaction through generosity and sympathy.</p>
                  </div>
                </div>
                <div class="col-md-6 p-3">
                  <div class="left-image ">
                    <img src="assets/images/about.jpg" class="img-fluid" alt="vission" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="fun-facts">
      <div class="container">
        <div class="row">
          

          <div class="col-md-6 align-self-center">
          <div class="col-md-10 bg-light ">
                <div class="count-area-content p-2">
                  <!-- <div class="count-digit">1234</div> -->
                  <div class="count-title">  <img src="assets/images/community.jpeg" class="img-fluid" alt=""> </div>
                  
                </div>
              </div>
          </div>

          <div class="col-md-6">
          <div class="left-content">
              <span>Lorem ipsum dolor sit amet</span>
              <h2>Know about<em> our community.</em></h2>
              <p>We are a philanthropic creature government assistance association attempting to make a protected and sound world for each creature, and for individuals who love them.
                AMTM is hanging around for each creature out of luck, and has been beginning around 2010. We accept that each creature merits the best. That is the reason we are devoted to the salvage and restoration of stray and deserted creatures - we accept we can change their personal satisfaction through generosity and sympathy.</p>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="more-info about-info " >
      <div class="container">
        <div class="row">
          <div class="col-md-12 shadow ">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center pt-5">
                  <div class="right-content  ">
                     <h2>Our <em>Mission</em></h2>
                    <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
                    <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="left-image text-center">
                    <img src="assets/images/mission.png" class="img-fluid " alt="our-mission">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="more-info about-info " id="our-vision">
      <div class="container">
        <div class="row">
          <div class="col-md-12 shadow ">
            <div class="more-info-content re-order">
              <div class="row ">
                
                <div class="col-md-6 first ">
                  <div class=" text-center ">
                    <img src="assets/images/vision.png" class="img-fluid " alt="our-vision">
                  </div>
                </div>

                <div class="col-md-6 align-self-center pt-5 second">
                  <div class="right-content ">
                     <h2>Our <em>Vision</em></h2>
                    <p>Fusce nec ultrices lectus. Duis nec scelerisque risus. Ut id tempor turpis, ac dignissim ipsum. Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem. 
                    <br><br>Pellentesque in sagittis lacus, vel auctor sem. Quisque eu quam eleifend, ullamcorper dui nec, luctus quam.</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>








  <div class="request-form" id="videos">
      <section class="container "  >
        <div class="section-heading">
          <!-- <h2>What people say.. <em>about us</em></h2> -->
          <h2 class="text-light">Top <em class="text-light">Sayings</em></h2>
          <!-- <span>Lorem Ipsum war der Standard der Branche </span> -->
        </div>
            <div class="container text-center">
              <h6>Lord Karuna Veg Society (Regd.) has been founded on pious roots of right doing and dharma, which are the core principles of Jainism. Jainism as a religion has always believed in promoting and teaching people to lead their lives in the right manner, to walk on the path of righteousness and to ensure that no harm is done ever to any form of life, be it knowingly or unknowingly.</h6>
            </div>

            
        </section>

    </div>
      <!-- News Feed ends here -->





    



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