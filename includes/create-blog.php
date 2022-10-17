
<?php
$content_struct = " 

<div class='container'>
<div class='row'>
<div class='col-md-12 mt-3'>
<ul>
	
<p>Enter your Full width Content</p>	

</ul>
</div>


<div class='col-md-6 mt-3'>
<ul>
	
  <p>Enter your Content 50% width</p>	
	
</ul>
</div>

<div class='col-md-6 mt-3'><img alt='man-vs-animal' src='https://karunaveg.com/uploaded_images/sample-image.jpg' style='width: 100%; height: 180px;' /></div>


<div class='col-md-12 mt-3'>
<ul>

	<b>Paragraph Heading</b><br>
	
  <p>Enter your Full width Content</p>	
	
	
  <p><b>1. Bold heading with bullets </b>Enter your bullter points</p>	

  <p><b>2. Bold heading with bullets </b>Enter your bullter points</p>	
	
	
</ul>
</div>

<div class='col-md-12 mt-3'>
<ul>
  <b>Paragraph Heading</b><br>
    
  <p>Enter your Full width Content</p>	
    
</ul>
</div>


<div class='col-md-6 mt-3'>
<ul>

  <b>Paragraph Heading with 50% content and 50% image</b><br>
    
  <p>Enter your Full width Content</p>	


  <p><b>1. Bold heading with bullets </b>Enter your bullter points</p>	

  <p><b>2. Bold heading with bullets </b>Enter your bullter points</p>	


</ul>
</div>

<div class='col-md-6 mt-3'><img alt='man-vs-animal' src='https://karunaveg.com/uploaded_images/sample-image.jpg' style='width: 100%; height: 180px;' /></div>



<div class='col-md-12 mt-3'>
<ul>

  <b>Paragraph Heading</b><br>
      
  <p>Enter your Full width Content</p>	
    
	<b>Some examples of animal rights are:</b><br>
	
		
  <p>Enter your Full width Content</p>	
	
  <p><b>1. Bold heading with bullets </b>Enter your bullter points</p>	

  <p><b>2. Bold heading with bullets </b>Enter your bullter points</p>	
	
	
</ul>
</div>

<!-- --------------------------------------------------------------- -->

<div class='col-md-6 mt-3'>
<ul>
	
<p>Enter your 50% width Content</p>	
	
</ul>
</div>

<div class='col-md-6 mt-3'><img alt='man-vs-animal' src='https://karunaveg.com/uploaded_images/sample-image.jpg' style='width: 100%; height: 180px;' /></div>
</div>
</div>

"
?>
  
<main id="main" class="main">

<div class="pagetitle mb-5">
      <h1>Create a new Blog</h1>

      </nav>
    </div><!-- End Page Title -->

    <section class="section ">
    
    <div class="col-lg-12">
                <section class="panel">

                
                  <!-- Upload image for Blog -->
                  <?php include('uploaded-images.php'); ?>
                  <!-- Upload image for Blog ends here-->
                 
                   

            <div class="panel-body">
              <div class="form">
                <form action="../includes/addpost.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <div class="col-sm-12 mb-3">
                      <label>Post Title</label>
                      <input type="text" class="form-control" name="post_title" required>
                    </div>
                    <div class="col-sm-12 mb-3">
                      <label>Slug(url)</label>
                      <input type="text" class="form-control" name="post_url" required>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-sm-12 mb-3">
                      <label>About Blog</label>
                      <input type="text" class="form-control" name="about_blog" maxlength="100" placeholder="Please write few words about blog to diplay on home page.." required>
                    </div>
                  </div>


                  <div class="col-sm-12 mb-3">
                    <label>Post Content</label>
                      <textarea class="form-control ckeditor" name="post_content" rows="6" ><?php echo $content_struct; ?></textarea>
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-sm-6">
                    <div class="col-sm-12 mb-3">
                      <label>Select Post Category</label>

                        <select name="post_category" class="form-control">
                          <?php
                            $categories = getAllCategory($db);
                            foreach($categories as $ct)
                            {
                          ?>
                            <option value="<?=$ct['id']?>"><?=$ct['name']?></option>
                          <?php
                            } 
                          ?>

                        </select>
                    </div>
                  </div>
                    <div class="form-group col-sm-6">
                      <div class="col-sm-12">
                        <label>Upload Photos(max 5)</label>

                          <input type="file" class="form-control" name="uploadfile" accept="image/*" >
                      </div> 
                    </div>
                </div>
                
                  <input type="submit" name="addpost" class="btn btn-primary" value="Publish">
              </form>
              </div>
            </div>

            </section>
        </div>
     
      </div>

  </div>
</section>

</main><!-- End #main -->

