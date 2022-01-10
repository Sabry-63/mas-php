<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing-in || Page</title>
        <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/datatables.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/bootstrap.rtl.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.carousel.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.theme.default.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/animate.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/main-rtl.css')); ?>>

  </head>
  <body>
    <div class="main-form d-flex flex-column align-items-center justify-content-center">
      <form class="from__login text-center">
        <div class="from__logo"><img src="content/assets/images/logo/logo.png" alt="LOGO"></div>
        <div class="form-group mb-3">
          <input class="w-100 border p-2" type="Text" placeholder="User Name">
        </div>
        <div class="form-group mb-3">
          <input class="w-100 border p-2" type="password" placeholder="Password">
        </div>
        <div class="form-group mb-3">
          <button class="btn main-btn w-50">Login </button>
        </div>
      </form>
    </div>
    <script src=<?php echo e(URL::asset('content/js/vendor/jquery-3.6.0.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/bootstrap.bundle.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/owl.carousel.min.js')); ?>> </script><script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src=<?php echo e(URL::asset('content/js/main.js')); ?>> </script>
  </body>
</html>
<?php /**PATH /home/mina/Desktop/mas-app/resources/views/login.blade.php ENDPATH**/ ?>