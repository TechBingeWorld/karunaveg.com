<?php

include("db.php");
include("function.php");


$myInput = $_POST['myInput'];

// $output = "";


$post="SELECT * FROM `posts` WHERE `title` LIKE '%".$myInput."%' ";
$videos="SELECT * FROM `videos` WHERE `title` LIKE '%".$myInput."%' ";

$run = mysqli_query($db,$post);  
$run1 = mysqli_query($db,$videos);  

$num = mysqli_num_rows($run);
$num1 = mysqli_num_rows($run1);


        
if($num > 0 || $num1 >0)
{
    while($row = mysqli_fetch_assoc($run)) 
    {
        // echo "   <label for='inputName5' id='select_label' class='form-label'>Select Sub Category Inside ' ".$parent_cat_name." '</label> 
                // <img src='uploaded_images/".getPostThumb($db,$row['id'])."' class='' style='width: 50px; height: 30px' > 
                // <i class='fa fa-search' style='position: absolute; right: 0; padding-right: 10px' ></i>

        // ";
        echo "  <a href='post.php?id=".$row['id']."'> 
                    <li class='text-capitalize'> 
                        
                            ". $row['title']."
                        
                    </li> 
                </a>    
            ";

   
    }
    
        
    while($row1 = mysqli_fetch_assoc($run1)) 
    {

        echo "  <a href='video-blog-single.php?id=".$row1['id']."'> 
                    <li class='text-capitalize' > 
                        ". $row1['title']. "
                        
                    </li>     
                </a> 
            ";

    }
    

}
    
else
{
    
    echo "<li style='background-color: #ddd;'> Result not found..</li>";
}   

exit;

    // All echo will combinely returns as response on success


?>