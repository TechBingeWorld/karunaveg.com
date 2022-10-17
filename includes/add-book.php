
<?php

?>
  
<main id="main" class="main">

<div class="pagetitle mb-5">
      <h1>Add New E-book</h1>

      </nav>
    </div><!-- End Page Title -->

    <section class="section ">
    
    <div class="col-lg-12">
                <section class="panel  p-3">

                
                  <!-- Upload image for Blog -->
                  <?php //include('upload-book.php'); ?>
                  <!-- Upload image for Blog ends here-->
                 
                   

            <div class="panel-body">
              <div class="form">
                <form  method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">

                        <div class="col-sm-12 mb-3">
                            <label>E-book Title</label>
                            <input type="text" class="form-control" name="ebook_title" required>
                        </div>

                        </div>
                            <div class="col-sm-12 mb-3">
                            <label>About E-Book</label>
                            <input type="text" class="form-control" name="about_ebook" >
                            </div>
                        </div>


                        <div class="row">
                          <div class="form-group col-sm-12">
                            <div class="col-sm-12 mb-3">
                              <label>Select Post Category</label>

                                <select name="Ebook_category" class="form-control" required>

                                  <option value=""  >Select</option>

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

                        <div class="col-sm-12 mb-3">
                        <label>Upload pdf </label>
                          <input type="file" class="form-control mt-3" name="uploadfile" accept="application/pdf"  >
                      </div>
                        
                    </div>

                  <input type="submit" name="addEbook" class="btn btn-primary" value="Publish">
              </form>
              </div>
            </div>

            </section>
        </div>
     
      </div>

  </div>
</section>

</main><!-- End #main -->

