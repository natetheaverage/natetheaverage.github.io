<?php $__env->startSection('title'); ?>
    <title>Canvas | Page not found</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="login-container">
        <p class="f-20 f-300 text-center">404 - Page Not Found</p>
        <p class="text-muted text-center">Sorry, but nothing exists here.</p>
        <?php if(Auth::guard('canvas')->check()): ?>
            <div style="text-align: center">
                <a href="<?php echo route('canvas.admin'); ?>" class="btn btn-link m-t-10">Back to Dashboard</a>
            </div>
        <?php else: ?>
            <div style="text-align: center">
                <a href="<?php echo route('canvas.blog.post.index'); ?>" class="btn btn-link m-t-10">Back to Blog</a>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::errors.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>