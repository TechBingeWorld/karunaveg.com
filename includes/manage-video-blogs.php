

    <main id="main" class="main">
  
  <div class="pagetitle">
    <h1>Manage Blogs</h1>

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
                  <th scope="col">Video Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Video_url</th>
                  <th scope="col">ending_words</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Remove</th>
                </tr>
              </thead>

              <tbody>
              <?php
                  $videos = getAllVideoblogs($db);
                  $count=1;
                  foreach($videos as $row)
                  {
              ?>
                <tr>  
                  <td scope="row"><?=$count?></td>
                  <td><?=$row['title']?></td>
                  <td class="text-truncate" style="max-width: 150px;"><?=$row['description']?></td>
                  <td><?=$row['url']?></td>
                  <td><?=$row['ending_lines']?></td>

                  <!-- <td><?=date('F jS, Y',strtotime($row['created_at']))?></td> -->

                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success" href="../includes/edit-video-blogs.php?id=<?=$row['id']?>">Edit <i class="icon_close_alt2"></i></a>
                    </div>
                  </td>

                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger" href="../includes/remove-video-blogs.php?id=<?=$row['id']?>">Remove <i class="icon_close_alt2"></i></a>
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

