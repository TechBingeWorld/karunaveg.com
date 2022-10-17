<?php


    // require('db.php');
    // include('function.php');
    // include('header.php');

if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$post_per_page=4;
$result=($page-1)*$post_per_page;




  $query = "SELECT * FROM `posts` ORDER BY id  LIMIT $result,$post_per_page";
  $run = mysqli_query($db, $query);

  $num = mysqli_num_rows($run);

  if($num>0)
  { 
    ?>  
    <div class="services recently_added_blogs">
      <div class="container-fluid col-11 ">
        <div class="row ">
          <div class="col-md-12">
            <div class="section-heading text-left">
              
              <h2>Recently added</h2>
  
            </div>
          </div>

        
          <?php
    while( $row = mysqli_fetch_assoc($run))
    {
        //  echo $row['id'];
      // echo $row['title']."<br>";
      // echo $row['content']."<br>"; 
    
  
      ?>
          <div class="col">
          <a class="post-item__inner" style="text-decoration:none; color:black" href="post.php?id=<?= $row['id']?>">
            <div class="card service-item mb-3" style=" ">

                  <div class="card-img">
                      <img src="uploaded_images/<?= getPostThumb($db,$row['id'])?>" id="blog-img" class="card-img-top" style="height:200px;" alt="<?php
                        $alt= str_replace(' ', '-', ( $row['title']));
                        echo$alt?>">      <!--  Important....--> 
                  </div>

                  <!-- <div class="item-zoom">
                    <img src="http://vizua.net/dummy.jpg">
                  </div> -->

                  <div class="down-content">
                      <h4><?php echo $row['title'] ?></h4>
                      <div>
                        <span> Published on  
                            <time class="post-item__meta post-item__meta--date" datetime="2022-02-14T20:24:54+00:00">
                              <?= date('F jS, Y',strtotime($row['created_at']))?>
                            </time>
                        </span>
                      </div>

                      <span class="text-truncated"> <?php echo $row['content']; ?> </span>
                  </div>

                  
                  <!-- <div class="car  d-btn" > -->
                    <a href="post.php?id=<?= $row['id']?>" class="filled-button text-center m-3">Read More</a>
                  <!-- </div> -->
            </div>
          </a>

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