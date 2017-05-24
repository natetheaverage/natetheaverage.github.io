<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('canvas::backend.shared.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('title'); ?>
        <?php echo $__env->make('canvas::backend.shared.partials.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body <?php if(Auth::guard('canvas')->check()): ?> class="toggled sw-toggled" <?php endif; ?>>
        <?php if(Auth::guard('canvas')->guest()): ?>
            <?php echo $__env->yieldContent('login'); ?>
        <?php else: ?>
            <?php echo $__env->make('canvas::backend.shared.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('canvas::backend.shared.components.preloader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('canvas::backend.shared.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        <?php echo $__env->make('canvas::backend.shared.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('canvas::backend.shared.partials.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('unique-js'); ?>
    </body>
</html>
