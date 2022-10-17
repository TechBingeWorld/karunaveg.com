<!-- Header -->
<!-- <div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-12">
        <ul class="left-info">
          <li><a href="#"><i class="fa fa-envelope"></i>contact@company.com</a></li>
          <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="right-icons">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div> -->

<?php
error_reporting(0);
?>

<style>




/*  */

.header .form{

position: relative;
/* width: 100%;  */
width: 400px; 
text-align: right;
}

.header .form .fa-search{

position: absolute;
top:15px;
left: 20px;
color: #9ca3af;

}

.header .form span{

position: absolute;
right: 17px;
top: 13px;
padding: 2px;
border-left: 1px solid #d1d5db;

}

.header .left-pan{
padding-left: 7px;
}

.header .left-pan i{

padding-left: 5px;
}

.header .form-input{
background-color:#fff;
height: 45px;
width: 100%;
text-indent: 33px;
/* border-radius: 10px; */

}

.header .form-input:focus{
box-shadow: none;
border:2px solid sgray;
outline: none;
}



.header .dropbtn {
background-color: #04AA6D;
color: white;
padding: 16px;
font-size: 16px;
border: none;
cursor: pointer;
}

.header .dropbtn:hover, .dropbtn:focus {
background-color: #3e8e41;
}

.header #myInput {
box-sizing: border-box;
background-image: url('searchicon.png');
background-position: 14px 12px;
background-repeat: no-repeat;
font-size: 16px;
padding: 14px 20px 12px 45px;
border: none;
border-bottom: 1px solid #ddd;
}

.header #myInput:focus {outline: 1px solid #ddd;}

header .dropdown {
position: relative;
display: inline-block;
}

header .dropdown-content {
display: none;
position: absolute;
background-color: #fff;
/* min-width: 350px; */
width: 100%;
overflow: auto;
border: 1px solid #f7f8f7;
z-index: 1;
}


header .dropdown-content li {
font-size: 14px;
color: black;
padding: 8px;
text-decoration: none;
display: block;
text-align: left;
border-bottom: 1px solid rgb(207, 207, 207); 
/* padding-left: 0px; */
  
}



/* .dropdown a:hover {background-color: #ddd;} */
header .dropdown-content li:hover 
{
  background-color: #ddd;
}


@media only screen and (max-width: 768px) {

  .header .form{

    width: 100%; 
    padding: 0 15px 0 15px;
  }

}





</style>


<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid ">
      <!-- <a class="navbar-brand" href="index.html"><h2>Karuna veg </h2></a> -->
        <a class="navbar-brand" href="index.php" ><img src="assets/images/Karunaveg-logo.png" style="width :80px; height: 50px; padding:0; margin:0" alt="karuna-veg-logo" srcset=""></a>


        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
    
        <li>
            <div class="form ">
            <i class="fa fa-search"></i>
            <input type="text" class="form-control form-input" id="myInput" onkeydown="hide_search_dropdown()" onkeyup="filterFunction()"  placeholder="Search here...">
            <!-- <span class="left-pan"><i class="fa fa-microphone"></i></span> -->
              <ul class="table datatable dropdown-content" id="myDropdown" class="">
                
                <!-- <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a> -->
                </ul>
          </div>
        </li>


          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blogs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="videos.php">Videos</a>  
          </li>

          <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>


          <li class="nav-item " id="search-join-us">

              <div class="d-flex justify-content-center h-100">
                <!-- <div class="searchbar">
                  <input class="search_input" type="text" name="" placeholder="Search...">
                  <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                </div> &nbsp &nbsp &nbsp -->
                <button class="btn btn-sm join-us" data-toggle="modal" data-target="#exampleModalCenter" >Join us</button>
              </div>

          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>


<script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>

<script>


function filterFunction() {
  
  // document.getElementById("myDropdown").classList.toggle("show");
  // document.getElementById("myDropdown").style.display ="block";


  var myInput = document.getElementById("myInput").value;
        // console.log(selected_option);
  if(myInput !='')
  {
      $.ajax({
          url:'includes/get-search-suggestion.php',
          method:'POST',
          data: {

              myInput : myInput,
        
      },
      success: function (response) {
  
          // document.getElementById("myDropdown").innerHTML=response; 
          // alert(response);
          // $('#myDropdown').fadeIn();
          $('#myDropdown').slideDown();
          $('#myDropdown').html(response);
      }
      });

  }
  else
  {
      $('#myDropdown').fadeOut();
      $('#myDropdown').html("");
  }

}



</script>
