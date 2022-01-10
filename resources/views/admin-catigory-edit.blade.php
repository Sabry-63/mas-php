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
    <link rel="stylesheet" href={{URL::asset('content/css/main-rtl.css')}} >
  </head>
  <body>
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-4 col-lg-2">
            <ul class="admin__nav">
              <li> <a href="{{ route('admin.category') }}">الاصناف </a></li>
              <li> <a href="{{ route('admin.product.index') }}">المنتجات </a></li>
              <li> <a href="admin-contact.html">معلومات التواصل</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf

                <li>  <button type="submit">Logout</button></li>
            </form>
            </ul>
          </div>
          <div class="col">
            <div class="admin__content">
              <div class="row border-bottom">
                <div class="col-lg-6 mb-5">
                  <h4 class="mb-3">تعديل صنف </h4>
                  <form method="POST" action="{{ route('admin.CategoryEditPost',['category'=>$category->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                      <label class="mb-3" for="my-input" >تحميل صوره</label>
                      <input class="form-control" id="my-input" name="image" type="file">
                    </div>
                    <div class="mb-3">
                      <input class="form-control" value="{{ $category->catName}}" name="catName" type="text" placeholder="اسم الصنف">
                    </div>
                    <button class="btn btn-primary" type="submit">حفظ</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src={{ URL::asset('content/js/vendor/jquery-3.6.0.min.js')}}> </script>
    <script src={{ URL::asset('content/js/vendor/bootstrap.bundle.min.js') }}> </script>
    <script src={{ URL::asset('content/js/vendor/owl.carousel.min.js') }}> </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src={{ URL::asset('content/js/main.js') }}> </script>
  </body>
</html>
