<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
        <link rel="stylesheet" href={{URL::asset('content/css/vendor/datatables.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/bootstrap.rtl.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/owl.theme.default.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/animate.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/main-rtl.css')}}>

  </head>
  <body>
    <main class="home-page">
      <div id="loader"> <img class="loader-img" src="content/assets/images/loader.gif" alt=""></div>
      <!-- Start Navbar-->
      <nav class="navbar navbar-expand-lg" id="header">
        <div class="container"><a class="navbar-brand" href="#"> <img src="content/assets/images/logo/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><ion-icon name="menu-outline"></ion-icon></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center text-lg-start">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="index-rtl.html">الريئسية</a></li>
              <li class="nav-item"><a class="nav-link" href="men-rtl.html#">رجالي</a></li>
              <li class="nav-item"><a class="nav-link" href="women-rtl.html">نسائي</a></li>
              <li class="nav-item"><a class="nav-link" href="children-rtl.html">اطفالي</a></li>
              <li class="nav-item"><a class="nav-link" href="special-rtl.html">منتجات مميزه</a></li>
              <li class="nav-item"><a class="nav-link" href="index-rtl.html#contact">اتصل بنا</a></li>
              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn dropdown-toggle" id="dropdownMenuButton1" type="button" data-bs-toggle="dropdown" aria-expanded="false"><ion-icon name="language-outline"></ion-icon></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="index.html">الانجليزية</a></li>
                    <li><a class="dropdown-item" href="index-rtl.html">العربية</a></li>
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
            <div class="col mb-3">
              <div class="categories__box"><a class="categories__link d-block p-4 border" href="#men">رجالي</a></div>
            </div>
            <div class="col mb-3">
              <div class="categories__box"><a class="categories__link d-block p-4 border" href="#women">نسائي</a></div>
            </div>
            <div class="col mb-3">
              <div class="categories__box"><a class="categories__link d-block p-4 border" href="#chiled">اطفالي</a></div>
            </div>
            <div class="col mb-3">
              <div class="categories__box"><a class="categories__link d-block p-4 border" href="#special">منتجات </a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Start Categories-->
      <!-- Start Men -->
      <section class="men bg-bage-content py-5" id="men">
        <div class="container">
          <div class="title-section mb-4">
            <h2 class="text__title">رجالي </h2>
          </div>
          <div class="product-slider border-top pt-4 owl-carousel owl-theme">
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/1.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/2.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/3.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/4.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/5.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/6.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/7.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/8.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
          </div>
          <div class="view-more text-center"><a class="btn main-more" href="men-rtl.html">شاهد المزيد</a><a class="btn main-more" href="men-rtl.html">شاهد المزيد</a></div>
        </div>
      </section>
      <!-- End Men -->
      <!-- Start Video-->
      <section class="video p-0">
        <div class="container-fulid">
          <div class="video__content">
            <div class="overlay"></div>
            <video src="content/assets/video/1.mp4" autoplay type="video/mp4" muted loop> </video>
          </div>
        </div>
      </section>
      <!-- End Video-->
      <!-- Start Women -->
      <section class="women py-5" id="women">
        <div class="container">
          <div class="title-section mb-4">
            <h2 class="text__title">نسائي </h2>
          </div>
          <div class="product-slider border-top pt-4 owl-carousel owl-theme">
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/1.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/2.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/3.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/4.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/5.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/6.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/7.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/8.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
          </div>
          <div class="view-more text-center"><a class="btn main-more" href="women-rtl.html">شاهد المزيد</a><a class="btn main-more" href="women-rtl.html">شاهد المزيد</a></div>
        </div>
      </section>
      <!-- End Women -->
      <!-- Start Video-->
      <section class="video">
        <div class="container-fulid">
          <div class="video__content">
            <div class="overlay"></div>
            <video src="content/assets/video/2.mp4" autoplay type="video/mp4" muted loop> </video>
          </div>
        </div>
      </section>
      <!-- End Video-->
      <!-- Start Children -->
      <section class="children bg-bage-content py-5" id="chiled">
        <div class="container">
          <div class="title-section mb-4">
            <h2 class="text__title">اطفالي </h2>
          </div>
          <div class="product-slider border-top pt-4 owl-carousel owl-theme">
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/1.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/2.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/3.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/4.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/5.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/6.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/7.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/men/8.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
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
              <!-- End item-->
            </div>
          </div>
          <div class="view-more text-center"><a class="btn main-more" href="children-rtl.html">شاهد المزيد</a><a class="btn main-more" href="children-rtl.html">شاهد المزيد</a></div>
        </div>
      </section>
      <!-- End Children -->
      <!-- Start Special -->
      <section class="special py-5" id="special">
        <div class="container">
          <div class="title-section mb-4">
            <h2 class="text__title">منتجات مميزه </h2>
          </div>
          <div class="product-slider border-top pt-4 owl-carousel owl-theme">
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/special/1.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">منتج</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت</p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/special/2.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">منتج</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت</p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/special/3.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">منتج</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت</p>
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
              <!-- End item-->
            </div>
            <div class="item">
              <div class="product-card">
                <div class="row g-0">
                  <div class="col-6">
                    <div class="product-body"><img class="card-img" src="/content/assets/images/products/special/4.png" alt="T-shirt">
                      <div class="d-flex justify-content-between flex-wrap pt-3 border-top">
                        <h5 class="card-title">منتج</h5>
                        <p class="card-text">100 EG</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="card-info h-100">
                      <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت</p>
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
              <!-- End item-->
            </div>
          </div>
          <div class="view-more text-center"><a class="btn main-more" href="special.html">شاهد المزيد</a><a class="btn main-more" href="special.html">شاهد المزيد</a></div>
        </div>
      </section>
      <!-- End Special-->
      <!-- Start Contact -->
      <section class="bg-bage-content bg-btn-up contact py-5" id="contact">
        <div class="container">
          <div class="title-section mb-4">
            <h2 class="text__title">تواصل معانا </h2>
          </div>
          <div class="row">
            <div class="col-lg-8 mb-3 order-lg-1 order-2">
              <form method="get" action="">
                <input class="form-control mb-3" type="text" placeholder="الاسم">
                <input class="form-control mb-3" type="text" placeholder="رقم الهاتف">
                <textarea class="form-control mb-3" rows="3" placeholder="الرسالة"></textarea>
                <button class="btn main-btn">ارسال</button>
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
            <p>نص تجربي يمكن استبدالة في اي وقت نص تجربي يمكن استبدالة في اي وقت </p>
          </div>
          <div class="col-sm-4 mb-3">
            <h4 class="mb-3">الصفحات </h4>
            <ul class="d-flex footer__list">
              <li> <a href="index-rtl.html">الريئسية </a></li>
              <li> <a href="men-rtl.html">رجالي </a></li>
              <li> <a href="women-rtl.html">نسائي </a></li>
              <li> <a href="children-rtl.html">اطفالي </a></li>
              <li> <a href="special-rtl.html">منتجات اخري</a></li>
              <li> <a href="index-rtl.html#contact">تواصل معانا </a></li>
            </ul>
          </div>
          <div class="col-sm-4 mb-3">
            <h4 class="mb-3">التواصل الاجتماعي </h4>
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
    <script src={{URL::asset('content/js/vendor/jquery-3.6.0.min.js')}}> </script>
    <script src={{URL::asset('content/js/vendor/bootstrap.bundle.min.js')}}> </script>
    <script src={{URL::asset('content/js/vendor/owl.carousel.min.js')}}>
     </script><script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src={{URL::asset('content/js/main.js')}}> </script>
    <script src={{URL::asset('content/js/home-rtl.js')}}> </script>
  </body>
</html>
