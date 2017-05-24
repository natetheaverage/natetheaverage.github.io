<?php if(isset($tag->title)): ?>
    <?php $__env->startSection('title', \Canvas\Models\Settings::blogTitle().' | '.$tag->title); ?>
<?php else: ?>
    <?php $__env->startSection('title', \Canvas\Models\Settings::blogTitle().' | Blog'); ?>
<?php endif; ?>
<?php $__env->startSection('og-title', \Canvas\Models\Settings::blogTitle()); ?>
<?php $__env->startSection('twitter-title', \Canvas\Models\Settings::blogTitle()); ?>
<?php $__env->startSection('og-description', \Canvas\Models\Settings::blogDescription()); ?>
<?php $__env->startSection('twitter-description', \Canvas\Models\Settings::blogDescription()); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php echo $__env->make('canvas::frontend.blog.partials.tag', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('canvas::frontend.blog.partials.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('canvas::frontend.blog.partials.paginate-index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <script src="<?php echo e(elixir('vendor/canvas/assets/js/frontend.js')); ?>" charset="utf-8"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('canvas::frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>