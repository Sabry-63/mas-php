<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/datatables.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/bootstrap.rtl.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.carousel.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/owl.theme.default.min.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/vendor/animate.css')); ?>>
    <link rel="stylesheet" href=<?php echo e(URL::asset('content/css/main-rtl.css')); ?>>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script src=<?php echo e(URL::asset('content/js/vendor/jquery-3.6.0.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/bootstrap.bundle.min.js')); ?>> </script>
    <script src=<?php echo e(URL::asset('content/js/vendor/owl.carousel.min.js')); ?>> </script><script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src=<?php echo e(URL::asset('content/js/main.js')); ?>> </script>
</body>
</html>
<?php /**PATH /home/mina/Desktop/mas-app/resources/views/layouts/app.blade.php ENDPATH**/ ?>