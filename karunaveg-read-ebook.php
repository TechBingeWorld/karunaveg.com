
<?php

  require('includes/db.php');
  include('includes/function.php');
  include('includes/header.php');


    $ebookid = $_GET['ebookid'];

    $query = "SELECT * FROM `e_books` WHERE `id` = '$ebookid' ";
    $run = mysqli_query($db, $query);

    $row = mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon1.png" type="image/png" />
    <title>Karunaveg</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
 
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!-- main css -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="assets/css/Blog-style.css" />
    <!-- <link rel="stylesheet" href="css/responsive.css" /> -->
  </head>










<body style="margin:0px;">

<div class="fluid-container mt-5 pt-3">
    <iframe src="uploaded_pdfs/<?=$row['pdf_file_name'] ?>"
   width="100%" height="100%" style="border: none;">
</div>







  <!--================Blog Area =================-->

  <!--================Header Menu Area =================-->
  <?php    include('includes/footer.php'); ?>
  <!--================Header Menu Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>