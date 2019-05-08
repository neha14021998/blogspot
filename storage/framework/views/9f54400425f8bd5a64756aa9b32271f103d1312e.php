<?php $__env->startSection('content'); ?>
        <div style="height:600px; width:600px; border:10px; border-color:black; margin-left:200px; background-color:transparent">
        <h1>POST</h1>
        <?php if(count($posts)>0): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="well">
                    <div class="row">
                        <div class="col-md-8 col-sm-4">
                                <h3><a href="/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h3>
                                <small>Written on <?php echo e($post->created_at); ?> by <?php echo e($post->user->name); ?></small>
                        </div>
                        <div class="col-md-8 col-sm-4">
                            <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" style="width:100%">
                        </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($posts->links()); ?>

        <?php else: ?>
            <p>No posts found</p>
        <?php endif; ?>
    </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Project\resources\views/posts/index.blade.php ENDPATH**/ ?>