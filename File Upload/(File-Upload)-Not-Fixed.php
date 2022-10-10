<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'):
$imageName = $_FILES['image']['name'];
$imageSize = $_FILES['image']['size'];
$imageTmp  = $_FILES['image']['tmp_name'];
$imageType = $_FILES['image']['type'];
echo $imageName . '<br>';
echo $imageSize . '<br>';
echo $imageTmp  . '<br>';
echo $imageType . '<br>';
endif;
?>
<form action="" method="POST" enctype="multipart/form-data">
 <input type="file" name="image" />
 <input type="submit" value="Upload">
</form>
</body>
</html>