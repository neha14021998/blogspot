<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel_Project')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/mycss.css')); ?>" >
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" >
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</head>
<body>
    <div id="app">
        <?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
                <?php echo $__env->make('include.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
               
        </div>
        <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <!--<script src="vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> 
    <script>
    CKEDITOR.replace('article-ckeditor');
    </script>-->

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel_Project\resources\views/layouts/app.blade.php ENDPATH**/ ?>