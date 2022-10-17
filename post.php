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
    <!--<div id="preloader">-->
    <!--    <div class="jumper">-->
    <!--        <div></div>-->
    <!--        <div></div>-->
    <!--        <div></div>-->
    <!--    </div>-->
    <!--</div>  -->
    <!-- ***** Preloader End ***** -->

   
    <!-- Header  -->
    <?php
      require('includes/header.php');
      require('includes/db.php');
      require('includes/function.php');
      error_reporting(0);
      ini_set( "display_error s", 1 );

   
    ?>

    <!-- Header ends here -->

    <?php
          $post_id=$_GET['id'];
          $query = "SELECT * FROM `posts` WHERE `id`= '$post_id' ";
          $run = mysqli_query($db, $query);
        
          $num = mysqli_num_rows($run);
        
          $row = mysqli_fetch_assoc($run);
            
            //   echo $row['title'];
            //   echo $row['created_at'];
            //   echo $row['content'];
            
          
        ?>

<style>
.post-header .centered {
    position: absolute;
    top: 25%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center; 
    }
    .post-header img{
      height:350px; 
      filter: brightness(40%) 
      }
      
      .more-info {
        margin-top: 40px;
    }
    @media only screen and (max-width: 768px) {
      .post-header img{
        height: 250px;
      }
      .post-header .centered {
      position: absolute;
      top: 30%;
      left: 50%;
     
      }
      .post-header h2{
        font-size: 26px;
        /* line-height:10px */
      }
      .post-header label{
        font-size: 14px;
        /* line-height:10px */
      }
      
}
</style>


<div class="fluid-containers post-header pt-5">
  <img src="uploaded_images/<?= getPostThumb($db,$row['id'])?>" id="blog-img" class="card-img-top" style="" alt="<?php
                    $alt= str_replace(' ', '-', ( $row['title']));
                    echo$alt?>">      <!--  Important....--> 
    <div class="centered text-light">
        <h2 class="card-title"><?php echo $row['title']; ?></h2>
        <label><i class="fa fa-calendar" aria-hidden="true"></i> Published on  
            <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
              <?= date('F jS, Y',strtotime($row['created_at']))?>
            </time>
        </label><br>
        <label><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>&nbsp Category: <?=getCategory($db,$row['category_id'])?></label>
    </div>
</div>


    <!-- Page Content -->
    <!-- <div class="page-heading header-text" style=" background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(uploaded_images/<?php   getPostThumb($db,$row['id'])?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="card-title"><?php// echo $row['title']; ?></h1>
                  <span> Published on  
                      <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                        <?php// date('F jS, Y',strtotime($row['created_at']))?>
                      </time>
                  </span>
                  <span class=" ">Category <?php //getCategory($db,$row['category_id'])?></span>
          </div>
        </div>
      </div>
    </div> -->





    <div class="more-info about-info">
      <div class="container">
        <div class="more-info-content">
          <div class="right-content">

            

            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <span> Published on  
                      <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                        <?= date('F jS, Y',strtotime($row['created_at']))?>
                      </time>
            </span>
            <h6><?php echo $row['content'] ?></h6>
            <!-- <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p> -->

            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam nihil magnam magni perferendis sit, inventore maxime architecto ab officia illum vitae veritatis asperiores laborum quaerat ratione omnis, possimus, sunt quae?</p>
            
            <h4>Lorem ipsum dolor sit amet.</h4>

            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus amet, corporis corrupti quod illum id autem assumenda nostrum quo, odio libero dolorum. Expedita, enim non voluptatibus qui veritatis iste ad? Voluptates natus dolor, minus culpa magnam! Iusto blanditiis beatae laudantium.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dolor nemo optio facere impedit fugiat obcaecati blanditiis tempora inventore sapiente beatae aspernatur vitae fuga totam possimus eveniet, praesentium maiores! Dolorum illum voluptates ipsum aspernatur explicabo numquam, aliquid a amet, deleniti eos suscipit totam laudantium excepturi voluptatum fugiat eum nesciunt minus iste, expedita provident temporibus, alias possimus veritatis aut fugit? Eaque.</p> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Display comments section --><br><br>
    <div class="container mt-5">
        <?php
              if(isset($_GET['id'])){
                ?>
    <div class="card">
                <h4 class="card-header bg-secondary text-light">Comments</h4>
                <?php
    $comments = getComments($db,$post_id);
    if(count($comments)<1){
      echo '<div class="card-body"><p class="text-center card-text">No Comments..</p></div>';
    }
    foreach($comments as $comment){
      ?>
    <div class="card-body">
                <h4 class="card-text mb-3"><?=$comment['comment']?></h4>
                <span class="" ><?=$comment['name']?></span>
                <span class="text-secondary"> <small><?=date('F jS, Y',strtotime($comment['created_at']))?></small></span>

                </div>
                <!-- <hr> -->
      <?php
    }
                ?>
                
              </div>
                <?php
              }
              ?>
    </div>
              <!-- Display comments section ends here-->


    <!-- Insert comments section -->

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a <em>comment</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="includes/add_comment.php" method="post">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" name="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea rows="6" class="form-control" id="message" name="comment" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="hidden" name="post_id" value="<?=$post_id?>">
                      <button type="submit" id="form-submit" class="filled-button" name="addcomment">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



            
      <!-- FAQ -->

      <?php
          include("includes/faq.php");
      ?>
      <!-- FAQ ends here -->


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