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

  <header class="header-bar d-flex d-lg-block align-items-center">
    <div class="site-logo">
      <a href="index.php">Gallery</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
      <ul class="js-clone-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="photos.php">Photos</a></li>
        <li><a href="upload.php">">Upload</a></li>
        <li class="active"><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li><li><a href="index.php?logout=1">Logout</a></li>
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
      <div class="row justify-content-center">
        
        <div class="col-md-8 pt-4">
          
          <div class="row mb-5" data-aos="fade-up">
            <div class="col-12">
              <h2 class="text-white mb-4 text-center">My Blog</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>

            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>

            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>

            <div class="col-md-12" data-aos="fade-up">
              <div class="d-flex blog-entry align-items-start">
                <div class="mr-5 img-wrap"><a href="#"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a></div>
                <div>
                  <h2 class="mt-0 mb-2"><a href="#">Advanced Photography Tutorial For Pro</a></h2>
                  <div class="meta mb-3">Posted by James on <a href="#">Feb. 24, 2020</a></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis aliquid doloremque qui, saepe alias eum?</p>
                </div>
              </div>
            </div>  

            <div class="col-12 text-center">
              <div class="custom-pagination">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <span>...</span>
                <a href="#">7</a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
          <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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