<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/bootstrap.rtl.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/owl.theme.default.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/vendor/animate.css')}}>
    <link rel="stylesheet" href={{URL::asset('content/css/main-rtl.css')}}>
  </head>
  <body>
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-4 col-lg-2">
            <ul class="admin__nav">
                <li> <a href="{{ route('admin.category') }}">الاصناف </a></li>
                <li> <a href="{{ route('admin.product.index') }}">المنتجات </a></li>
                <li> <a href="#">معلومات التواصل</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf

                    <li>  <button type="submit">Logout</button></li>
                </form>
              </ul>
          </div>
          <div class="col">
            <div class="border-bottom py-3">
              <p> <b>أسم المنتج : </b>تيشرت</p>
            </div>
            <div class="border-bottom py-3">
              <p> <b>سعر المنتج : </b>100 Eg</p>
            </div>
            <div class="border-bottom py-3">
              <p> <b>وصف المنتج المنتج : </b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam deleniti id, laudantium accusamus in eaque.</p>
            </div>
            <h4 class="border-bottom py-3">صور المنتج</h4>
            <div class="row">
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/1.png" alt="" height="200px"></div>
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/2.png" alt="" height="200px"></div>
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/3.png" alt="" height="200px"></div>
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/4.png" alt="" height="200px"></div>
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/5.png" alt="" height="200px"></div>
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/6.png" alt="" height="200px"></div>
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/7.png" alt="" height="200px"></div>
              <div class="col-lg-3 mb-3"> <img class="w-100 border p-2" src="content/assets/images/products/men/8.png" alt="" height="200px"></div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src={{URL::asset('content/js/vendor/jquery-3.6.0.min.js')}}> </script>
    <script src={{URL::asset('content/js/vendor/bootstrap.bundle.min.js')}}> </script>
    <script src={{URL::asset('content/js/vendor/owl.carousel.min.js')}}> </script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src={{ URL::asset('content/js/main.js') }}> </script>
  </body>
</html>
