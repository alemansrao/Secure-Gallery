<?php
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo ucfirst(basename(__FILE__, '.php')); ?></title>
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
    <header class="header-bar d-flex d-lg-block align-items-center">
      <div class="site-logo">
        <a href="index.php">Shutter</a>
      </div>
      <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
      <div class="main-menu">
        <ul class="js-clone-nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="photos.php">Photos</a></li>
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
        <div class="row pt-4 mb-5 text-center">
          <div class="col-12">
            <?php
            $dir    = './album/' . basename(__FILE__, '.php');
            $noOfFiles = scandir($dir);
            $arrayLength = sizeof($noOfFiles) - 3;
            ?>
            <h2 class="text-white mb-4"><?php echo "'" . ucfirst(basename(__FILE__, '.php')) . "' &mdash; " . $arrayLength . " Photos"  ?></h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <?php
          $dir    = './album/' . basename(__FILE__, '.php');
          $filesArray = scandir($dir);
          array_shift($filesArray);
          array_shift($filesArray);
          if (($key = array_search("index.php", $filesArray)) !== false) {
            unset($filesArray[$key]);
            //removing index.php from the result array
          }
          $sizeArray = array("4", "8", "8", "4");
          $index = 0;
          foreach ($filesArray as $filename) {
            echo "<div class=\"col-6 col-md-6 col-lg-" . $sizeArray[$index] . "\" data-aos=\"fade-up\">";
            echo "<a href=\"album/" . basename(__FILE__, '.php') . "/" . $filename . "\" class=\"d-block photo-item\" data-fancybox=\"gallery\">";
            echo "<img src=\"album/" . basename(__FILE__, '.php') . "/" . $filename . "\" alt=\"Image\" class=\"img-fluid\">";
            echo "<div class=\"photo-text-more\">";
            echo  "<span class=\"icon icon-search\"></span>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
            $index = $index + 1;
            if ($index == 4) {
              $index = 0;
            }
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