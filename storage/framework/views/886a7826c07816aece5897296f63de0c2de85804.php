<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Tools</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="main">
        <?php echo $__env->make('canvas::backend.shared.partials.sidebar-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>Tools</h2>
                    <ul class="actions">
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="<?php echo route('canvas.admin.tools'); ?>"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> Refresh Tools</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <?php echo $__env->make('canvas::backend.tools.sections.maintenance-mode', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <?php echo $__env->make('canvas::backend.tools.sections.export-data', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <?php echo $__env->make('canvas::backend.tools.sections.clear-cache', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php echo $__env->make('canvas::backend.tools.partials.modals.cache-clear', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php if(Session::get('_cache-clear')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_cache-clear'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_cache-clear')); ?>

    <?php endif; ?>
    <?php if(Session::get('_enable-maintenance-mode')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_enable-maintenance-mode'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_enable-maintenance-mode')); ?>

    <?php endif; ?>
    <?php if(Session::get('_disable-maintenance-mode')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_disable-maintenance-mode'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_disable-maintenance-mode')); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>