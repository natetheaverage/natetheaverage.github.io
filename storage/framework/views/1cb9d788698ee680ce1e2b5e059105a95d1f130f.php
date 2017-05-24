<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Help</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="main">
        <?php echo $__env->make('canvas::backend.shared.partials.sidebar-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>Help</h2>
                    <ul class="actions">
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="<?php echo route('canvas.admin.help'); ?>"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> Refresh Help</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h2>Help Topics
                            <small>Help is available for all of the following topics:</small>
                        </h2>
                    </div>
                    <div class="card-body card-padding">
                        <?php echo $__env->make('canvas::backend.help.partials.overview', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <hr>
                        <?php echo $__env->make('canvas::backend.help.partials.topics', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <hr>
                        <?php echo $__env->make('canvas::backend.help.partials.items', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php echo $__env->make('canvas::backend.shared.components.smooth-scroll', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>