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

        // if(isset($_GET['page'])){
        //   $page=$_GET['page'];
        // }else{
        //   $page=1;
        // }
        // $post_per_page=9;
        // $result=($page-1)*$post_per_page;
    ?>

    <!-- Header ends here -->


    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Career in karunaveg</h1>
            <!-- <span>feel free to send us a message now!</span> -->
          </div>
        </div>
      </div>
    </div>


 


        <?php

$query = "SELECT * FROM `career` ORDER BY id DESC ";
$run = mysqli_query($db, $query);

$num = mysqli_num_rows($run);

if($num>0)
{ 
  ?>  
    <div class="services">
      <div class="container">
        <div class="row">

      
        <?php
  while( $row = mysqli_fetch_assoc($run))
  {
      //  echo $row['id'];
    // echo $row['title']."<br>";
    // echo $row['content']."<br>"; 
  

    ?>
        
          <div class="col-md-3">
            <div class="service-item">
              <img src="assets/images/job.jpg" class="img-fluid" alt="">
              <div class="down-content">
                <h4><?php echo $row['job_title'] ?></h4>
                <div style="margin-bottom:10px;">
                  <span> 25 days ago </span>
                </div>

                <p><?php echo $row['job_des'] ?></p>

                <a href="#" class="filled-button">Apply</a>
              </div>
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
  echo "Please add some jobs.";
}

?>


    <!-- form -->
    
    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Apply <em>Now</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact"  method="get">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="mobile" type="tel" class="form-control" id="mobile" placeholder="+91 " required="">
                    </fieldset>
                  </div>

                  <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <!-- <label for="inputState">State</label> -->
                    <fieldset>
                      <select id="inputState" class="form-control ">
                        <option selected>select</option>
                        <option>...</option>
                      </select>
                    </fieldset>
                  </div>

                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

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


      function scrollWin() {
        window.scrollTo(0, 500);
        }
    </script>


  </body>
</html>