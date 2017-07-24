<?php
require 'directory_reader.php';

$images = directoryReader('images');

if (!$images) {
  die ('Could not load images.');
}
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <title>Gallery</title>
    <style>
    .image-wrapper {
      position: relative;
      float: left;
      padding: 0.5%;
    }
    .text {
      position: absolute;
      font-size: 300%;
      bottom: 5%;
      right: 10%;
      color: #FFF;
      font-weight: 900;
    }
    img {
      border-radius: 5%;
    }
    h1 {
      text-transform: uppercase;
    }
    </style>
  </head>
  <body>
    <h1>Bear gallery</h1>
    <?php foreach ($images as $image): ?>
    <div class = "image-wrapper">
    <!-- gets images -->
    <img src = "<?php echo $image; ?>">
    <div class = "text">
    <!-- gets names of images -->
    <?php $info = pathinfo($image); ?>
    <?php echo $info['filename']; ?>
    </div>
    </div>
    <?php endforeach; ?>
  </body>
</html>
