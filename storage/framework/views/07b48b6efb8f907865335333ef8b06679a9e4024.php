<?php $__env->startSection('og-title', $post->title); ?>
<?php $__env->startSection('twitter-title', $post->title); ?>
<?php $__env->startSection('og-description', $post->meta_description); ?>
<?php $__env->startSection('twitter-description', $post->meta_description); ?>
<?php $__env->startSection('title', \Canvas\Models\Settings::blogTitle().' | '.$post->title); ?>
<?php if($post->page_image): ?>
    <?php $__env->startSection('og-image', url( $post->page_image )); ?>
    <?php $__env->startSection('twitter-image', url( $post->page_image )); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <article>
        <div class="container" id="post">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php if($post->page_image): ?>
                        <div class="text-center">
                            <img src="<?php echo e(asset($post->page_image)); ?>" class="post-hero">
                        </div>
                    <?php endif; ?>
                    <h1 class="post-page-title"><?php echo e($post->title); ?></h1>
                    <p class="post-page-meta">
                        <?php echo e(\Carbon\Carbon::parse($post->published_at)->diffForHumans()); ?> &#183; <?php echo e($post->readingTime()); ?> MIN READ
                        <?php if($post->tags->count()): ?>
                            <br>
                            <?php echo join(' ', $post->tagLinks()); ?>

                        <?php endif; ?>
                    </p>

                    <?php echo $post->content_html; ?>


                    <p class="dts" style="text-align: center"><span style="padding: 10px">&#183;</span><span style="padding: 10px">&#183;</span><span style="padding: 10px">&#183;</span></p>

                    <?php echo $__env->make('canvas::frontend.blog.partials.author', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>
            </div>
        </div>
    </article>

    <?php echo $__env->make('canvas::frontend.blog.partials.paginate-post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <script src="<?php echo e(elixir('vendor/canvas/assets/js/frontend.js')); ?>" charset="utf-8"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('canvas::frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>