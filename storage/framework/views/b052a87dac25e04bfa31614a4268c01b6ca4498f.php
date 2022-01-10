<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet"  href=<?php echo e(URL::asset('content/css/vendor/bootstrap.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URl::asset('content/css/vendor/owl.carousel.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.theme.default.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/animate.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/main-ltr.css')); ?>>
  </head>
  <body>
    <main class="home-page">
      <div id="loader"> <img class="loader-img"  src="content/assets/images/loader.gif" alt=""></div>
      <!-- Start Navbar-->
      <nav class="navbar navbar-expand-lg" id="header">
        <div class="container"><a class="navbar-brand" href="#"> <img src="content/assets/images/logo/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><ion-icon name="menu-outline"></ion-icon></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center text-lg-start">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>

              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                 <li class="nav-item"><a class="nav-link" href="<?php echo e(route('product',['category'=>$category->id])); ?>"><?php echo e($category->catName); ?></a></li>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


              <li class="nav-item"><a class="nav-link" href="index.html#contact">Contact Us</a></li>
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
      <!-- Start Header-->
      <header class="mb-0" id="header">
        <div class="owl-carousel owl-theme header-slider">
          <div class="item">
            <div class="header__bg">
              <div class="row">
                <div class="col-lg-6">  <img src="content/assets/images/header/men.png" alt="men"></div>
                <div class="col-lg-6">
                  <div class="header__info">
                    <h1>All Sports</h1>
                    <h2>Men </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="header__bg">
              <div class="row">
                <div class="col-lg-6">  <img src="content/assets/images/header/women.png" alt="women"></div>
                <div class="col-lg-6">
                  <div class="header__info">
                    <h1>All Sports</h1>
                    <h2>Women </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="header__bg">
              <div class="row">
                <div class="col-lg-6">  <img src="content/assets/images/header/children.jpg" alt="children"></div>
                <div class="col-lg-6">
                  <div class="header__info">
                    <h1>All Sports</h1>
                    <h2>Children </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="header__bg">
              <div class="row">
                <div class="col-lg-6">  <img src="content/assets/images/header/gift.png" alt="gift"></div>
                <div class="col-lg-6">
                  <div class="header__info">
                    <h1>All Sports</h1>
                    <h2>Special Items </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header-->
      <!-- Start Categories-->
      <section class="py-5 categories">
        <div class="container">
          <div class="row text-center">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col mb-3">
            <div class="categories__box"><a class="categories__link d-block p-4 border" href="#<?php echo e($category->catName); ?>"><?php echo e($category->catName); ?></a></div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
      </section>
      <!-- End Categories-->
      <!-- Start Men -->
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="men bg-bage-content py-5" id=<?php echo e($category->catName); ?>>
                <div class="container">
                  <div class="title-section mb-4">
                    <h2 class="text__title"><?php echo e($category->catName); ?></h2>
                  </div>

                  <div class="product-slider border-top pt-4 owl-carousel owl-theme">

                    <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                      <div class="product-card">
                        <div class="row g-0">
                          <div class="col-6">

                            <div class="product-body">
                                <img class="card-img" src="/content/assets/images/products/men/1.png" alt="T-shirt">

                              <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                                <h5 class="card-title"><?php echo e($product->ProductName); ?></h5>
                                <p class="card-text"><?php echo e($product->price); ?> EG</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="card-info h-100">
                              <p> <?php echo e($product->ProductDescription); ?></p>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- End Item-->
                  </div>

                </div>
                <div class="view-more text-center"><a class="btn main-more" href="<?php echo e(route('product',['category'=>$category->id])); ?>">View More</a><a class="btn main-more" href="<?php echo e(route('product',['category'=>$category->id])); ?>">View More</a></div>



              </section>
              <!-- End Men-->
              <!-- Start Video-->
              <section class="video p-0">
                <div class="container-fulid">
                  <div class="video__content">
                    <div class="overlay"></div>
                    <video src="content/assets/video/1.mp4" autoplay type="video/mp4" muted loop> </video>
                  </div>
                </div>
              </section>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      <!-- End Special-->
      <!-- Start Contact -->
      <section class="bg-btn-up contact bg-bage-content py-5" id="contact">
        <div class="container">
          <div class="title-section mb-4">
            <h2 class="text__title">Contact Us </h2>
          </div>
          <div class="row">
            <div class="col-lg-8 mb-3 order-lg-1 order-2">
              <form method="get" action="">
                <input class="form-control mb-3" type="text" placeholder="Your Name">
                <input class="form-control mb-3" type="text" placeholder="Your Phone">
                <textarea class="form-control mb-3" rows="3" placeholder="Your Message"></textarea>
                <button class="btn main-btn">Send</button>
              </form>
            </div>
            <div class="col-lg-4 h-100 mb-3 order-1 order-lg-2">
              <div class="bg-bage-content p-3 mb-3">
                <div class="contact__info d-flex align-items-center mb-2">
                  <div class="icon me-2"><ion-icon name="call"></ion-icon> </div>
                  <div class="text"><span>+02 123 456 789</span></div>
                </div>
                <div class="contact__info d-flex align-items-center">
                  <div class="icon me-2"><ion-icon ion-icon name="mail"></ion-icon></div>
                  <div class="text"><span>mas@info.com</span></div>
                </div>
              </div>
              <div class="map-google">
                <div style="width: 100%">
                  <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(MAS)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact -->
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
    <script src=<?php echo e(URL::asset('content/js/vendor/jquery-3.6.0.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/bootstrap.bundle.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/owl.carousel.min.js')); ?>> </script><script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src=<?php echo e(URL::asset('content/js/main.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/home.js')); ?>> </script>
  </body>
</html>
<?php /**PATH /home/mina/Desktop/mas-app/resources/views/index.blade.php ENDPATH**/ ?>