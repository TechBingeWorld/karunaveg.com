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

<style>

/*-------------------------------------------------------------
 Video-Blog-single 
 -------------------------------------------------------------*/
 #video_blog_single{
    margin-top: 100px;
}

#video_blog_single .card-iframe iframe{
    width: 100%;
    height: 500px;
}


#video_blog_single .card-title{
    font-weight: bold;
    font-size: 18px;
}

#video_blog_single .date{
    color: var(--para);
}



@media (max-width: 768px) {

    #video_blog_single{
        margin-top: 80px;
    }

    #video_blog_single .card-iframe iframe{
        width: 100%;
        height: 300px;
    }
    
    
}
/*-------------------------------------------------------------
 Video-Blog-single ends here
 -------------------------------------------------------------*/

</style>

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
    error_reporting(0);
      require('includes/header.php');
      require('includes/db.php');
      require('includes/function.php');
      
      ini_set( "display_errors", 1 );

   
    ?>

    <!-- Header ends here -->

    <?php
          $video_blog_id = $_GET['id'];
          $query = "SELECT * FROM `videos` WHERE `id`= '$video_blog_id' ";
          $run = mysqli_query($db, $query);
        
          $num = mysqli_num_rows($run);
        
          $row = mysqli_fetch_assoc($run);
            
              // echo $row['title'];          // used just for testing
              // echo $row['created_at'];
              // echo $row['content'];
            
          
        ?>


    <div class="container-fluid col-11">
        <div id="video_blog_single">
        
                <div class="card-iframe  ">
                        <!--  Important....--> 
                    <!--<iframe class="embed-responsive-item" id="card-img-iframe" src="<?php// $row['url']?>" allowfullscreen></iframe>-->
                    
                    <iframe class="embed-responsive-item " src="<?= $row['url']?>?rel=0&modestbranding=1" allowfullscreen ></iframe>

                </div>
            <br>

            <h5 class="card-title"><?php echo $row['title']; ?></h5>

            <span><?php echo $row['description']; ?></span>
            <br><br>
            <span class="date"> Published on  
                      <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                        <?= date('F jS, Y',strtotime($row['created_at']))?>
                      </time>
            </span>
            <h6><?php echo $row['content'] ?></h6>
    
          </div>
    </div>




    <!-- Display comments section -->
    <div class="container-fluid col-11 mt-5">
        <?php
              if(isset($_GET['id'])){
                ?>
    <div class="card">
                <h4 class="card-header bg-secondary text-light">Comments</h4>
                <?php
                    $comments = getVideoComments($db,$video_blog_id);
                    if(count($comments)<1){
                    echo '<div class="card-body"><p class="text-center card-text">No Comments..</p></div>';
                    }
                    foreach($comments as $comment){
                ?>
            <div class="card-body">
                <h5 class="card-text mb-1"><?=$comment['comment']?></h5>
                <span class="text-secondary" ><?=$comment['name']?>, </span>
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
                      <input type="hidden" name="video_blog_id" value="<?=$video_blog_id?>">
                      <button type="submit" id="form-submit" class="filled-button" name="addVideoBlogComment">Submit</button>
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
          //include("includes/faq.php");
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