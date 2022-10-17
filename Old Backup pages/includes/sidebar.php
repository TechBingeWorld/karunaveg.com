<div class="col-lg-4">
                  <h4>Related Posts</h4>
                
 <?php
 $pquery="SELECT * FROM posts WHERE category_id={$post['category_id']} ORDER BY id DESC";
 $prun=mysqli_query($db,$pquery);
 while($rpost=mysqli_fetch_assoc($prun)){
   if($rpost['id']==$post_id){
     continue;
   }
   ?>

   <a href="post.php?id=<?=$rpost['id']?>" style="text-decoration:none;color:black">
<div class="card mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                      <div class="col-md-5" style="background-image: url('images/<?=getPostThumb($db,$rpost['id'])?>');background-size: cover">
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h5 class="card-title"><?=$rpost['title']?></h5>
                          <div class="post-item__excerpt text-truncate">
                    <?=$post['content']?>
                    </div>
                          <p class="card-text"><small class="text-muted">Posted on <?=date('F jS, Y',strtotime($rpost['created_at']))?></small></p>
                        </div>
                      </div>
                    </div>
                  </div>  
   </a>
   <?php
 }
 ?>
</div>
              </div>