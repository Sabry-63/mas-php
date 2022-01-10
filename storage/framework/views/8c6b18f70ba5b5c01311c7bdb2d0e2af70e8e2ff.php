<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product || Page</title>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/datatables.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/bootstrap.rtl.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.carousel.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.theme.default.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/animate.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/main-rtl.css')); ?>>
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
              <h4 class="mb-3">اضافة منتج جديد</h4>
              <form method="POST" action="<?php echo e(route('admin.product.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                  <select name="categoryid" class="form-select" aria-label="Default select example">
                    <option>اختار الصنف</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" ><?php echo e($category->catName); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text" name="ProductName" placeholder="اسم المنتج">
                </div>
                <div class="mb-3">
                  <input class="form-control" type="number" name="price" min="0" placeholder="سعر المنتج">
                </div>
                <div class="mb-3">
                  <textarea class="form-control" name="ProductDescription" placeholder="وصف المنتج"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input class="form-control" name="image1" id="formFileMultiple" type="file" multiple="">
                  <label class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input class="form-control" name="image2" id="formFileMultiple" type="file" multiple="">
                  <label class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input class="form-control" name="image3" id="formFileMultiple" type="file" multiple="">
                  <label class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input class="form-control" name="image4" id="formFileMultiple" type="file" multiple="">

                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" type="submit">اضافة</button>
                </form>
                </div>
                <h4 class="text-center my-3">جميع المنتجات الموجوده</h4>
                <div class="table-responsive">
                  <table class="table table-sm table-bordered table-striped table-hover" id="admin-products">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المنتج </th>
                        <th scope="col">السعر</th>
                        <th scope="col">الوصف</th>
                        <th scope="col">الصنف</th>
                        <th scope="col">العمليات</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <th scope="row"><?php echo e($product->id); ?></th>
                        <td><?php echo e($product->ProductName); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->ProductDescription); ?></td>
                        <td><?php echo e($product->category->catName); ?></td>
                        <td>
                            <form style="display: inline-block" method="POST" action="<?php echo e(route('admin.product.destroy',['product'=>$product])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger"><ion-icon name="trash-sharp"></ion-icon> sae</button>

                           </form>
                           <a href="<?php echo e(route('admin.product.edit',['product'=>$product])); ?>"  class="btn btn-success"><ion-icon name="create-sharp"></ion-icon></a>
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
    <script src=<?php echo e(URL::asset('content/js/vendor/datatables.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/admin.js')); ?>> </script>
  </body>
</html>
<?php /**PATH /home/mina/Desktop/mas-app/resources/views/admin-product.blade.php ENDPATH**/ ?>