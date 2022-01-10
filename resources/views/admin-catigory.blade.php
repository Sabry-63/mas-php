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
                <li> <a href="#">معلومات التواصل</a></li>
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
                  <h4 class="mb-3">اضافة صنف جديد</h4>
                  <form method="POST" action="{{ route('admin.catStore') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <input class="form-control" name="catName" type="text" placeholder="اسم الصنف">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-3" for="my-input" >تحميل صوره</label>
                        <input class="form-control" name="image" id="my-input" type="file">
                      </div>
                    <button class="btn btn-primary" type="submit">اضافة</button>
                  </form>
                </div>
              </div>
              <h4 class="text-center my-3">جميع الاصناف الموجوده</h4>
              <div class="table-responsive">
                <table class="table table-sm table-bordered table-striped table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">اسم الصنف</th>
                      <th scope="col">الصوره</th>
                      <th scope="col">العمليات</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                  <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->catName }}</td>
                    <td>{{ $category->image }}</td>
                    <td>
                      <a href="{{ route('categoryEdit',['category'=>$category]) }}" class="btn btn-success"><ion-icon name="create-sharp"></ion-icon></a>
                      <form style="display: inline-block" method="POST" action="{{ route('admin.categorydelete',['category'=>$category->id])}}">

                        @csrf
                        <input type="text" hidden name="id" value="{{ $category->id }}">
                        <button class="btn btn-danger" type="submit"><ion-icon name="trash-sharp"></ion-icon> </button>
                    </form>
                       </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
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
