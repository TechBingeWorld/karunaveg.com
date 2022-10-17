
  <!-- <main id="main" class="main"> -->
      
  
      <!-- Button trigger modal -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-body d-grid text-center pt-3">
                <a type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Upload a E-Book here
                </a>
          </div>
          </div>
          </div>
        </div>
      </section>
    
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title" id="exampleModalLabel"> Upload E-book</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
    
              <form role="form" method="post" action="../includes/function.php" enctype="multipart/form-data">
                <div class="form-group ">
                  <div class="">
                    <label>Upload pdf </label>
                      <input type="file" class="form-control mt-3" name="uploadfile" accept="pdf/*"  >
                  </div>
                </div>
                <div class="d-grid text-center">
                    <button type="submit" name="uploadEbook"  class="btn btn-sm btn-success rounded-pill mt-4">Upload</button>
                </div>
              </form>
            </div>
    
          </div>
        </div>
      </div>
        
          <section class="section" >
                <div class="row">
                  <div class="col-lg-12">
          
                    <div class="card" >
                      <div class="card-body pt-3" style=" height: 180px; overflow-y: scroll" >
                        <!-- <h5 class="card-title">Datatables</h5> -->
          
                      <div class="row">
                        
                        <?php
                          $temp = getAllPdfs($db);
                          foreach($temp as $row)
                          {
                            //echo $row['image'].'<br>';
        
                        ?>
                          <div class="col-lg-3 col-md-12 col-sm-6 mb-4 mb-lg-0" >
                            <figure class="hover-img">
                                <!-- <img src="../uploaded_images/<?php //=getAllImage($db, $row['image']) ?>"
                                  class="w-100 shadow-1-strong rounded"
                                  alt="Boat on Calm Water"> -->
                                  <img src="../uploaded_pdfs/<?=$row['pdf']?>" id="blog-img" class="w-60 shadow-1-strong rounded" style="height:120px;" alt="<?php
                                $alt= str_replace(' ', '-', ( $row['pdf']));
                                echo$alt?>">      <!--  Important....--> 

                                <!-- <embed src="../uploaded_pdfs/<?=$row['pdf']?>" type="application/pdf"   height="300px" width="100%"> -->

                                <!-- <figcaption>
                                      <span>@Lorem <br/>Ispansum</span>
                                </figcaption> -->
                            </figure>
                          </div>
                        <?php
        
                          }                 
                        ?>
        
                      </div>
                    </div>
          
                  </div>
                </div>
              </section>
          
          <!--  </main> End #main -->
        
        
        