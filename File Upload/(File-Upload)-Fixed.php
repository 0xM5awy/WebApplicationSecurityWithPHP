<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!--
    Steps to protcet the file uploade
    1. raname the file
    2. Chack the file extension
    3. Chack the file MIMI type
    4. Chack the file size
-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'):
$imageName = $_FILES['image']['name'];
$imageSize = $_FILES['image']['size'];
$imageTmp  = $_FILES['image']['tmp_name'];
$imageType = $_FILES['image']['type'];
//Allowed Extension
$allowedExtension = array('jpg','gif','png','jpeg');
$imgaeExtension = end(explode('.', $imageName));
if (in_array($imgaeExtension,$allowedExtension)):
endif;
//Change the name of the file upload
$image = rand(0,100000) . '.' . $imgaeExtension;
endif;
//Allowed MIME Types
$allowedMIME = array('image/jpg','image/gif','image/png','image/jpeg');
if (in_array($imgaeExtension,$allowedMIME)):
endif;
//The Size of the file
if ($imageSize > 1024):
echo 'Image is too Large';
else:
//The file is now ready to move it to the datebase.
endif;
?>
<form action="" method="POST" enctype="multipart/form-data">
 <input type="file" name="image" />
 <input type="submit" value="Upload">
</form>
</body>
</html>