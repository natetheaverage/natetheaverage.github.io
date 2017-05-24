<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Edit Post</title>
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
    <?php echo $__env->make('canvas::backend.post.partials.modals.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php echo $__env->make('canvas::backend.post.partials.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('canvas::backend.shared.components.datetime-picker', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo JsValidator::formRequest('Canvas\Http\Requests\PostUpdateRequest', '#postUpdate');; ?>

    <?php if(Session::get('_update-post')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_update-post'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_update-post')); ?>

    <?php endif; ?>
    <?php if(Session::get('_new-post')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_new-post'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_new-post')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>