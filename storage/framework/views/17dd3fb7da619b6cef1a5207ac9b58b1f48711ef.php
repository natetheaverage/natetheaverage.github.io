<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Sign In</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('login'); ?>
    <div class="login-container">
        <?php echo $__env->make('canvas::backend.shared.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('canvas::auth.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php echo JsValidator::formRequest('Canvas\Http\Requests\LoginRequest', '#login'); ?>

    <?php echo $__env->make('canvas::backend.shared.components.show-password', ['inputs' => 'input[name="password"]'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>