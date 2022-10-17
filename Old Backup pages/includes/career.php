
<!-- Modal to add new category -->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Job openings</h1>

    </nav>
  </div><!-- End Page Title -->


  <!-- Button trigger modal -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
      <div class="card">
          <div class="card-body pt-3">
            <a type="button" class="btn btn-outline-secondary " data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add New Job
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
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> New Job</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form method="post" action="../includes/add_career.php" >
            <div class="form-group">
              <label for="job_title">Job Title</label>
              <input type="text" class="form-control mt-4 mb-4" id="exampleInputEmail1" name="job_title" aria-describedby="emailHelp" placeholder="Enter Job Title">
            </div>
            <div class="form-group">
              <label for="text">Job description</label>
              <textarea class="form-control mt-4" id="exampleInput" name="job_des"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4" name="submit">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </div>


  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title">Datatables</h5> -->

            <!-- Table with stripped rows -->
            <table class="table table-striped table-advance table-hover">
                          <tbody>
                            <tr>
                              <th>#</th>
                              <th>Job</th>
                              <th>Job description</th>
                              <th>Action</th>


                            
                            </tr>

                    <?php
                    $careers = getAllCareer($db);
                    $count=1;
                    foreach($careers as $career)
                    {
                    ?>
                            <tr>
                              <td><?=$count?></td>
                              <td><?=$career['job_title']?></td>
                              <td><?=$career['job_des']?></td>

                            
                              <td>
                                <div class="btn-group">
                                
                                  <a class="btn btn-danger" href="../includes/remove_career.php?id=<?=$career['id']?>">Remove <i class="icon_close_alt2"></i></a>
                                </div>
                              </td>
                            </tr>
                      <?php
                      $count++;
                    }
                    ?>
                          </tbody>
                        </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>


  </section>
  
</main>