<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('canvas::frontend.shared.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('canvas::frontend.shared.partials.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('canvas::frontend.shared.partials.user-generated-css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <?php echo $__env->make('canvas::frontend.shared.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->yieldContent('unique-js'); ?>
        <?php echo $__env->make('canvas::frontend.shared.partials.user-generated-js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('canvas::frontend.shared.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
