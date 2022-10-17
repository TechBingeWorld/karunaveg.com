<?php
require('db.php');
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) 
{
    // echo "Working..";
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "../images/".$filename;
		


		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			// Get all the submitted data from the form
		    $sql = "INSERT INTO images (`post_id`, `image`) VALUES ('3', '$filename')";
            // Execute query
		    mysqli_query($db, $sql);

		}
        else
        {
			$msg = "Failed to upload image";
	    }
}
$result = mysqli_query($db, "SELECT * FROM images");
while($data = mysqli_fetch_array($result))
{

	?>
<img src="<?php echo $data['Filename']; ?>">

<?php
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value=""/>
        <br>
	    <div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>
</form>
</div>
</body>
</html>
