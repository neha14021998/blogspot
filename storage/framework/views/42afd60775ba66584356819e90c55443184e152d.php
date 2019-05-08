<?php $__env->startSection('content'); ?>
    <h1>Create Post</h1> 
    
        <?php echo Form::open(['action' =>'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']); ?>

        <div  style="width:50%; margin-left:300px; align:center; border:1px black solid;">
            <?php echo e(Form::label('title','Title')); ?>

            <?php echo e(Form::text('title','',['class'=>'form-control', 'placeholder'=>'Enter Title'])); ?>

            <?php echo e(Form::label('body','Body')); ?>

            <?php echo e(Form::textarea('body','',['id'=> 'article-ckeditor','class'=>'form-control', 'placeholder'=>'Enter Body'])); ?>

            <div class="form-group">
                <?php echo e(Form::file('cover_image')); ?>

            </div>
            <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

             <?php echo Form::close(); ?>

    </div>    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel_Project\resources\views/posts/create.blade.php ENDPATH**/ ?>