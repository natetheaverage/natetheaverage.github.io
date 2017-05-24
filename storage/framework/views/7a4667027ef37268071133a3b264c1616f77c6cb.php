<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Settings</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="main">
        <?php echo $__env->make('canvas::backend.shared.partials.sidebar-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section id="content">
            <div class="container">
                <div class="block-header">
                    <h2>Settings</h2>
                    <ul class="actions">
                        <li class="dropdown">
                            <a href="" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="<?php echo route('canvas.admin.settings'); ?>"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> Refresh Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php echo $__env->make('canvas::backend.settings.partials.settings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('canvas::backend.settings.partials.system-information', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('canvas::backend.settings.partials.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php echo JsValidator::formRequest('Canvas\Http\Requests\SettingsUpdateRequest', '#settings'); ?>

    <?php if(Session::get('_update-settings')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_update-settings'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_update-settings')); ?>

    <?php endif; ?>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>