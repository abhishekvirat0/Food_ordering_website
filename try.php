<!DOCTYPE html>
<html lang="en">
<body>
    <form action="try.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" id="submit" value="UPLOAD"/>
    </form>


<?php



        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db    = 'food_db';

       $conn=mysqli_connect($servername,$username,$password,$db);


         if($conn->connect_error)

              {
                   die(mysqli_error());
               }

$name = ''; $type = ''; $size = ''; $error = '';
function compress_image($source_url, $destination_url, $quality) {

  $info = getimagesize($source_url); 

  if ($info['mime'] == 'image/jpeg')
    $image = imagecreatefromjpeg($source_url);

  elseif ($info['mime'] == 'image/gif')
    $image = imagecreatefromgif($source_url);

  elseif ($info['mime'] == 'image/png')
    $image = imagecreatefrompng($source_url);

  imagejpeg($image, $destination_url, $quality);
  return $destination_url;
}

        if(isset($_POST['submit']))
        {
          $image = $_FILES['image']['name'];

          $img = $_FILES['image']['name'];



        // move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
         


  if ($_FILES["image"]["error"] > 0) 
  {
    $error = $_FILES["image"]["error"];
  }
  else if (($_FILES["image"]["type"] == "image/gif") ||
    ($_FILES["image"]["type"] == "image/jpeg") ||
    ($_FILES["image"]["type"] == "image/png") ||
    ($_FILES["image"]["type"] == "image/pjpeg")) 
  {

    $url = 'upload/' . $img;
    $filename = compress_image($_FILES["image"]["tmp_name"], $url, 50);


    
        $insert = "INSERT into infor (image) VALUES ('$image')";

			   mysqli_query($conn,$insert);
  			echo "File is valid, and was successfully uploaded.\n";
          		
 

        

          

        }
      }

        ?>

</body>
</html>