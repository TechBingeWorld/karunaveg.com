
<?php
require 'db.php';
if(isset($_POST['submit'])){
  
    $job_title=mysqli_real_escape_string($db,$_POST['job_title']);
    $job_des=mysqli_real_escape_string($db,$_POST['job_des']);
  
    $sql="INSERT INTO `career`(`job_title`, `job_des`) VALUES ('$job_title','$job_des')";


    $run = mysqli_query($db, $sql);

     if ($run) 
     {
        // echo "New record has been added successfully !";
        ?>
            <script>
                alert("New Job successfully.");
                window.location.href = "../admin/index.php?career";
            </script>
        <?php
     } 
     else 
     {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
  }


?>