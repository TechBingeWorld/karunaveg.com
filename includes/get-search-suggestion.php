<?php
error_reporting(0);
include("db.php");



$myInput = $_POST['myInput'];

// $output = "";


$sql="SELECT * FROM `posts` WHERE `title` LIKE '%".$myInput."%' ";

$run = mysqli_query($db,$sql);  

$num = mysqli_num_rows($run);


if($num > 0)
{

        
    while($row = mysqli_fetch_assoc($run)) 
    {


        // echo "  <li><a href='post.php?id=".$row['id']."'>". $row['title']."</a> 
        //         <i class='fa fa-search' ></i>
        // </li>       ";


        echo "  <a href='post.php?id=".$row['id']."'> 
                    <li class=''> 
                        ". $row['title']." 
                       
                    </li>     
                </a>   ";


    }
    

 

}
    
else
{
    
    echo "<li> Result not found..</li>";
}   

exit;

    // All echo will combinely returns as response on success


?>