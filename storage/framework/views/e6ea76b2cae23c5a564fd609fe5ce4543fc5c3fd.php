<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/bootstrap.rtl.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.carousel.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.theme.default.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/animate.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/main-rtl.css')); ?> >
  </head>
  <body>
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-4 col-lg-2">
            <ul class="admin__nav">
                <li> <a href="<?php echo e(route('admin.category')); ?>">الاصناف </a></li>
                <li> <a href="<?php echo e(route('admin.product.index')); ?>">المنتجات </a></li>
                <li> <a href="#">معلومات التواصل</a></li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <li>  <button type="submit">Logout</button></li>
                </form>
              </ul>
          </div>
          <div class="col">
            <div class="admin__content">
              <div class="row border-bottom">
                <div class="col-lg-6 mb-5">
                  <h4 class="mb-3">اضافة صنف جديد</h4>
                  <form method="POST" action="<?php echo e(route('admin.catStore')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row"><?php echo e($category->id); ?></th>
                    <td><?php echo e($category->catName); ?></td>
                    <td><?php echo e($category->image); ?></td>
                    <td>
                      <a href="<?php echo e(route('categoryEdit',['category'=>$category])); ?>" class="btn btn-success"><ion-icon name="create-sharp"></ion-icon></a>
                      <form style="display: inline-block" method="POST" action="<?php echo e(route('admin.categorydelete',['category'=>$category->id])); ?>">

                        <?php echo csrf_field(); ?>
                        <input type="text" hidden name="id" value="<?php echo e($category->id); ?>">
                        <button class="btn btn-danger" type="submit"><ion-icon name="trash-sharp"></ion-icon> </button>
                    </form>
                       </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src=<?php echo e(URL::asset('content/js/vendor/jquery-3.6.0.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/bootstrap.bundle.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/owl.carousel.min.js')); ?>> </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src=<?php echo e(URL::asset('content/js/main.js')); ?>> </script>
  </body>
</html>
<?php /**PATH /home/mina/Desktop/mas-app/resources/views/admin-catigory.blade.php ENDPATH**/ ?>