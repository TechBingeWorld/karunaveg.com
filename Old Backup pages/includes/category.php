
<!-- Modal to add new category -->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Categories</h1>

    </nav>
  </div><!-- End Page Title -->


  <!-- Button trigger modal -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
      <div class="card">
          <div class="card-body pt-3">
            <a type="button" class="btn btn-outline-secondary " data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add new Category
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
          <h5 class="modal-title" id="exampleModalLabel"> Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form role="form" method="post" action="../includes/addct.php">
            <div class="form-group">
              <label for="exampleInputEmail1"> New Category</label><br>
              <input type="text" name="category-name" class="form-control mt-4" id="exampleInputEmail3" placeholder="Enter new category name..">
            </div>
        
            <button type="submit" name="addct" class="btn btn-primary mt-4">Add</button><br><br>
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
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Categories</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>
                <?php
                    $posts = getAllCategory($db);
                    $count=1;
                    foreach($posts as $cat)
                    {
                ?>
                <tr>
                  <td scope="row"><?=$count?></td>
                  <td><?=$cat['name']?></td>

                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger" href="../includes/removepost.php?id=<?=$cat['id']?>">Remove <i class="icon_close_alt2"></i></a>
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

</main><!-- End #main -->

