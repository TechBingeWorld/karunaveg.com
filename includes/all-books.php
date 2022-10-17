

    <main id="main" class="main">
  
  <div class="pagetitle">
    <h1>Manage E-Books</h1>

    </nav>
  </div><!-- End Page Title -->

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
                  <th scope="col">E-Book Title</th> 
                  <th scope="col">About E-Book</th> 
                  <th scope="col">File Name</th>
                  <th scope="col">Published Date</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Remove</th>
                </tr>
              </thead>
 
              <tbody>
              <?php
                  $posts = getAllEbooks($db);
                  $count=1;
                  foreach($posts as $post)
                  {
              ?>
                <tr>
                  <td scope="row"><?=$count?></td>
                  <td><?=$post['title']?></td>
                  <td><?=$post['about_ebook']?></td>
                  <td><?=$post['pdf_file_name']?></td>

                  <td><?=date('F jS, Y',strtotime($post['created_at']))?></td>

                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success" href="../includes/edit-Ebook.php?id=<?=$post['id']?>">Edit <i class="icon_close_alt2"></i></a>
                    </div>
                  </td>

                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger" href="../includes/remove-Ebook.php?id=<?=$post['id']?>">Remove <i class="icon_close_alt2"></i></a>
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

