<?php $__env->startSection('content'); ?>
        <div style="height:600px; width:600px; border:10px; border-color:black; margin-left:200px; background-color:transparent">
        <h1>WELCOME TO BLOGPOST</h1>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
 <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Project\resources\views/pages/index.blade.php ENDPATH**/ ?>