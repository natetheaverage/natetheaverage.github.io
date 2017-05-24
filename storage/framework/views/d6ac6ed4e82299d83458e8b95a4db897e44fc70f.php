<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('canvas::backend.shared.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('title'); ?>
        <?php echo $__env->make('canvas::backend.shared.partials.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldContent('unique-js'); ?>
    </body>
</html>