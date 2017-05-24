<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | New Tag</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="main">
        <?php echo $__env->make('canvas::backend.shared.partials.sidebar-navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <section id="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo route('canvas.admin'); ?>">Home</a></li>
                            <li><a href="<?php echo route('canvas.admin.tag.index'); ?>">Tags</a></li>
                            <li class="active">New Tag</li>
                        </ol>
                        <?php echo $__env->make('canvas::backend.shared.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('canvas::backend.shared.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <h2>Create a New Tag</h2>
                    </div>
                    <div class="card-body card-padding">
                        <form class="keyboard-save" role="form" method="POST" id="tagUpdate" action="<?php echo route('canvas.admin.tag.index'); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                            <?php echo $__env->make('canvas::backend.tag.partials.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> Save</button>
                                &nbsp;
                                <a href="<?php echo route('canvas.admin.tag.index'); ?>"><button type="button" class="btn btn-link">Cancel</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php echo JsValidator::formRequest('Canvas\Http\Requests\TagCreateRequest', '#tagUpdate');; ?>


    <?php echo $__env->make('canvas::backend.shared.notifications.protip', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>