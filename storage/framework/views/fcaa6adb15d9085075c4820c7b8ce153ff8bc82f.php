<div class="card">
    <div class="card-header">
        <h2>General Settings
            <small>Overview of configuration options for your site.</small>
        </h2>
    </div>
    <div class="card-body card-padding">

        <?php echo $__env->make('canvas::backend.shared.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('canvas::backend.shared.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('canvas::backend.settings.partials.form.settings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
</div>