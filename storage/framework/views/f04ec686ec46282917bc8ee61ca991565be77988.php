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
              <h4 class="mb-3">تعديل  منتج </h4>
              <form method="POST" action="<?php echo e(route('admin.product.update',['product'=>$product])); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-3">
                  <select name="categoryid" class="form-select" aria-label="Default select example">
                    <option selected="">اختار الصنف</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option  value="<?php echo e($category->id); ?>"
                        <?php if( $category->id ==$product->category->id ): ?> selected  <?php endif; ?>
                        > <?php echo e($category->catName); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text" value="<?php echo e($product->ProductName); ?>" name="ProductName" placeholder="اسم المنتج">
                </div>
                <div class="mb-3">
                  <input class="form-control" type="number"  value="<?php echo e($product->price); ?>" name="price" min="0" placeholder="سعر المنتج">
                </div>
                <div class="mb-3">
                  <textarea class="form-control"  name="ProductDescription" placeholder="وصف المنتج"><?php echo e($product->ProductDescription); ?></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input disabled  class="form-control"  name="image1" id="formFileMultiple" type="file" multiple="">
                  <label class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input disabled class="form-control" name="image2" id="formFileMultiple" type="file" multiple="">
                  <label  class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input disabled class="form-control" name="image3" id="formFileMultiple" type="file" multiple="">
                  <label class="form-label" for="formFileMultiple">صور المنتج</label>
                  <input  disabled class="form-control" name="image4" id="formFileMultiple" type="file" multiple="">

                </div>
                <div class="mb-3">
                  <button class="btn btn-primary" type="submit">تعديل</button>
                </form>
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
<?php /**PATH /home/mina/Desktop/mas-app/resources/views/admin-product-edit.blade.php ENDPATH**/ ?>