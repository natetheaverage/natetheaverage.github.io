<div class="card">
    <div class="card-header">
        <h2>Quick Draft
            <small>Save a quick draft post:</small>
        </h2>

        <br>

        <?php echo $__env->make('canvas::backend.shared.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('canvas::backend.shared.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <form class="keyboard-save" role="form" method="POST" id="postCreate" action="<?php echo e(route('canvas.admin.post.store')); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

            <?php echo $__env->make('canvas::backend.home.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <br>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> Save Draft</button>
            </div>
        </form>
    </div>
</div>