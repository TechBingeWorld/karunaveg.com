<?php
require 'db.php';
?>



<main id="main" class="main">

<div class="pagetitle mb-5">
      <h1>Add Video</h1>

      </nav>
    </div><!-- End Page Title -->

    <section class="section ">
    
    <div class="col-lg-12">
                <section class="panel">

            <div class="panel-body">
              <div class="form">
                <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <div class="col-sm-12 mb-3">
                      <label>Video Title</label>
                      <input type="text" class="form-control" name="video_title" required>
                    </div>
                    <div class="col-sm-12 mb-3">
                      <label>Description</label>
                      <textarea class="form-control " name="video_description" rows="6" ></textarea>
                    </div>
                  </div>
                    <div class="col-sm-12 mb-3">
                      <label>(url)</label>
                      <input type="text" class="form-control" name="video_url" required>
                    </div>
                  </div>
                    <div class="col-sm-12 mb-3">
                      <label>Ending words</label>
                      <input type="text" class="form-control" name="video_ending_lines" placeholder="Please enter few ending words (optional)">
                    </div>
                  </div>


                </div>
                
                  <input type="submit" name="addvideo" class="btn btn-primary" value="Publish">
              </form>
              </div>
            </div>

            </section>
        </div>
     
      </div>

  </div>
</section>

</main><!-- End #main -->




<?php
require 'db.php';
if(isset($_POST['addvideo'])){
  
    $video_title=mysqli_real_escape_string($db,$_POST['video_title']);
    $video_description=mysqli_real_escape_string($db,$_POST['video_description']);
    $video_url=mysqli_real_escape_string($db,$_POST['video_url']);
    $video_ending_lines=mysqli_real_escape_string($db,$_POST['video_ending_lines']);
  
    $sql="INSERT INTO `videos`(`title`, `description`, `ending_lines`, `url`) VALUES ('$video_title',
    '$video_description','$video_ending_lines','$video_url')";


    $run = mysqli_query($db, $sql);

     if ($run) 
     {
        // echo "New record has been added successfully !";
        ?>
            <script>
                alert("Video Published successfully.");
                window.location.href = "../admin/index.php?manage_video_blogs";
            </script>
        <?php
     } 
     else 
     {
      ?>
        <script>
              alert("Processing Failed!");
              window.location.href = "../admin/index.php?manage_video_blogs";
            </script>
        <?php
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
  }


?>