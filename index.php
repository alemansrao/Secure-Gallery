<?php
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Bleh</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="site-wrap">
  <div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
  <div class="site-mobile-menu-close mt-3">
  <span class="icon-close2 js-menu-toggle"></span>
</div>
</div>
<div class="site-mobile-menu-body"></div>
</div>
<header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">
  <div class="site-logo">
  <a href="index.php">Gallery</a>
</div>
<div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
<div class="main-menu">
  <ul class="js-clone-nav">
  <li class="active"><a href="index.php">Home</a></li>
<li><a href="photos.php">Photos</a></li>
<li><a href="upload.php">Upload</a></li>
<li><a href="blog.php">Blog</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="index.php?logout=1">Logout</a></li>
</ul>
<ul class="social js-clone-nav">
  <li><a href="#"><span class="icon-facebook"></span></a></li>
<li><a href="#"><span class="icon-twitter"></span></a></li>
<li><a href="#"><span class="icon-instagram"></span></a></li>
</ul>
</div>
</header>
<main class="main-content">
  <div class="container-fluid photos">
  <div class="row align-items-stretch">
  <?php
$dir    = './album';
$albums = scandir($dir);
array_shift($albums);
array_shift($albums);
if (($key = array_search("index.php", $albums)) !== false) {
  unset($albums[$key]);
  //removing index.php from the result array
}
//loop through each album name
foreach ($albums as $alb) {
  $aloysius = $dir . "/" . $alb;
  $allPictures = scandir($aloysius);
  array_shift($allPictures);
  array_shift($allPictures);
  if (($key = array_search("index.php", $allPictures)) !== false) {
  unset($allPictures[$key]);
  //removing index.php from the result array
}
foreach ($allPictures as $picFile) {
  $tmp = explode('.', $picFile);
  $temp_fileExt = end($tmp);
  // echo "Extension of " . $picFile . " is " . $temp_fileExt;
  //put inside that if loop
  $thumbnailFile = "6dd075556effaa6e7f1e3e3ba9fdc5fa." . $temp_fileExt;
  if ($picFile == $thumbnailFile) {
  $file_extension = $temp_fileExt;
}
}
$alb_dir = $dir . "/" . $alb;
$pictures = scandir($alb_dir);
array_shift($pictures);
array_shift($pictures);
if (($key = array_search("index.php", $pictures)) !== false) {
  unset($pictures[$key]);
  //removing index.php from the result array
}
$photosInTheAlbum = scandir("./album/" . $alb);
array_shift($photosInTheAlbum);//.
array_shift($photosInTheAlbum);//..
array_shift($photosInTheAlbum);//index.php
$noThumbnail = "./0/noThumbnail.png";
$pathToThumbnail = "./album/" . $alb . "/6dd075556effaa6e7f1e3e3ba9fdc5fa." . $file_extension;
$pathToPage = "./" . $alb . ".php";
echo "\n<div class=\"col-6 col-md-6 col-lg-4\" data-aos=\"fade-up\">";
echo "\n<a href=\"" . $pathToPage . "\" class=\"d-block photo-item\">";
if (file_exists($pathToThumbnail))
echo "\n<img src=\"" . $pathToThumbnail . "\" alt=\"Image\" class=\"img-fluid\">";
else
echo "\n<img src=\"" . $noThumbnail . "\" alt=\"Image\" class=\"img-fluid\">";
echo "\n<div class=\"photo-text-more\">";
echo "\n<div class=\"photo-text-more\">";
echo "\n<h3 class=\"heading\">" . ucfirst($alb) . "</h3>";
echo "\n<span class=\"meta\">" . sizeof($photosInTheAlbum) . " Photos" . "</span>";
echo "\n</div>";
echo "\n</div>";
echo "\n</a>";
echo "\n</div>";
}
?>
</div>
<div class="row justify-content-center">
  <div class="col-md-12 text-center py-5">
  <p>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;
<script>
document.write(new Date().getFullYear());
</script> All rights reserved | This template is made
with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
</div>
</div>
</div>
</main>
</div> <!-- .site-wrap -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/removeBanner.js"></script>
  <script src="js/main.js"></script>
</body>
  </html>