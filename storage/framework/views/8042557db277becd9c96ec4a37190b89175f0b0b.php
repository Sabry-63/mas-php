<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="<?php echo e(URL::asset('content/css/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('content/css/vendor/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('content/css/vendor/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('content/css/vendor/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('content/css/main-ltr.css')); ?>">
  </head>
  <body>
    <main class="product-page">
      <div id="loader"> <img class="loader-img" src="content/assets/images/loader.gif" alt=""></div>
      <!-- Start Navbar-->
      <nav class="navbar navbar-expand-lg" id="header">
        <div class="container"><a class="navbar-brand" href="#"> <img src="content/assets/images/logo/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><ion-icon name="menu-outline"></ion-icon></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center text-lg-start">
                <?php $__currentLoopData = $allcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('product',['category'=>$categoryq->id])); ?>"><?php echo e($categoryq->catName); ?></a></li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" id="dropdownMenuButton1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><ion-icon name="language-outline"></ion-icon></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="index.html">EN</a></li>
                    <li><a class="dropdown-item" href="index-rtl.html">AR</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar-->
      <header class="header" id="header">
        <div class="header__bg">
          <div class="row">
            <div class="col-lg-6">  <img src= <?php echo e(asset($category->image)); ?> alt="men"> </div>
            <div class="col-lg-6">
              <div class="header__info">
                <h1>All Sports</h1>
                <h2><?php echo e($category->catName); ?> </h2>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="men bg-bage-content pt-5 bg-page" id="men">
        <div class="container">
          <div class="title-section mb-4">
            <h2 class="text__title"><?php echo e($category->catName); ?></h2>
          </div>
          <div class="product border-top pt-4">
            <div class="row">
            <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="item">
                  <div class="product-card">
                    <div class="row g-0">
                      <div class="col-6">
                        <div class="product-body">
                          <div class="img-slider owl-theme owl-carousel">
                           <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="item"><img class="card-img" src="<?php echo e(URl::asset($image->imageName)); ?>" alt="T-shirt"></div>

                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                          <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                            <h5 class="card-title"><?php echo e($product->ProductName); ?></h5>
                            <p class="card-text"><?php echo e($product->price); ?> EG</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="card-info h-100">
                          <p><?php echo e($product->ProductDescription); ?>.</p>
                          <ul class="d-flex justify-content-between product__size">
                            <li>S </li>
                            <li>L</li>
                            <li>XL</li>
                            <li>XXL</li>
                          </ul>
                          <ul class="d-flex justify-content-between product__colors">
                            <li class="red"> </li>
                            <li class="green"> </li>
                            <li class="blue"> </li>
                            <li class="black"> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Start Btn Top-->
    <div class="btn-top d-none">
      <div class="container"><a href="#"><ion-icon name="chevron-up-outline" class="animate__infinite animate__fadeInUp animate__animated animate__animate__fast "></ion-icon></a></div>
    </div>
    <!-- End Btn Top-->
    <!-- Start Footer-->
    <footer class="main-footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 mb-3">
            <h4 class="mb-3">MAS </h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, dolor?</p>
          </div>
          <div class="col-sm-4 mb-3">
            <h4 class="mb-3">Pages </h4>
            <ul class="d-flex footer__list">
              <li> <a href="index.html">Home </a></li>
              <li> <a href="men.html">Men </a></li>
              <li> <a href="women.html">Women </a></li>
              <li> <a href="children.html">Children </a></li>
              <li> <a href="special.html">Special Items </a></li>
              <li> <a href="index.html#contact">Contact </a></li>
            </ul>
          </div>
          <div class="col-sm-4 mb-3">
            <h4 class="mb-3">Contact Us </h4>
            <ul class="footer__logo d-flex h-lg-100">
              <li> <a href="#"><ion-icon name="logo-facebook"></ion-icon> </a></li>
              <li> <a href="#"><ion-icon name="logo-whatsapp"></ion-icon> </a></li>
              <li> <a href="#"><ion-icon name="logo-instagram"></ion-icon> </a></li>
              <li> <a href="#"><ion-icon name="logo-twitter"></ion-icon> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <div class="copy-right text-center border-top">
      <p class="lead">Copy Rghit 2021 &copy; By Sabry</p>
    </div>
    <!-- End Footer-->
    <script src="<?php echo e(URL::asset('content/js/vendor/jquery-3.6.0.min.js')); ?>"> </script>
    <script src="<?php echo e(URL::asset('content/js/vendor/bootstrap.bundle.min.js')); ?>"> </script>
    <script src="<?php echo e(URL::asset('content/js/vendor/owl.carousel.min.js')); ?>"> </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="<?php echo e(URL::asset('content/js/main.js')); ?>"> </script>
    <script src="<?php echo e(URL::asset('content/js/product.js')); ?>"> </script>
  </body>
</html>
<?php /**PATH /home/mina/Desktop/mas-app/resources/views/men.blade.php ENDPATH**/ ?>