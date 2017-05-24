<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | New Post</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="main">
        <?php echo $__env->make('canvas::backend.shared.partials.sidebar-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section id="content">
            <div class="container">
                <?php echo $__env->make('canvas::backend.post.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php echo $__env->make('canvas::backend.post.partials.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('canvas::backend.shared.notifications.protip', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('canvas::backend.shared.components.datetime-picker', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('canvas::backend.shared.components.slugify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo JsValidator::formRequest('Canvas\Http\Requests\PostCreateRequest', '#postCreate'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>