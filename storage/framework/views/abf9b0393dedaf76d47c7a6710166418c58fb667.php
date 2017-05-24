<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Home</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="main">
        <?php echo $__env->make('canvas::backend.shared.partials.sidebar-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section id="content">
            <div class="container">
                <?php if(\Canvas\Models\User::isAdmin(Auth::guard('canvas')->user()->role)): ?>
                    <?php echo $__env->make('canvas::backend.home.sections.welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
                <div class="row">
                    <?php if(\Canvas\Models\User::isAdmin(Auth::guard('canvas')->user()->role)): ?>
                        <div class="col-sm-6 col-md-6">
                            <?php echo $__env->make('canvas::backend.home.sections.at-a-glance', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="col-sm-6 col-md-6">
                        <?php echo $__env->make('canvas::backend.home.sections.quick-draft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?php echo $__env->make('canvas::backend.home.sections.recent-posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?php echo $__env->make('canvas::backend.home.sections.canvas-news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php echo $__env->make('canvas::backend.home.partials.modals.update', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php if(Session::get('_login')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_login'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_login')); ?>

    <?php endif; ?>
    <?php echo $__env->make('canvas::backend.shared.components.slugify', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo JsValidator::formRequest('Canvas\Http\Requests\PostCreateRequest', '#postCreate'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>