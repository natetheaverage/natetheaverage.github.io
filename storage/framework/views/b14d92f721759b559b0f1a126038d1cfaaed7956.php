<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <div class="post-preview">
        <h2 class="post-title">
            <a href="<?php echo e($post->url($tag)); ?>"><?php echo e($post->title); ?></a>
        </h2>
        <p class="post-meta">
            <?php echo e($post->published_at->diffForHumans()); ?> &#183; <?php echo e($post->readingTime()); ?> MIN READ
            <br>
            <?php if (! ($post->tags->isEmpty())): ?>
                <?php echo implode(' ', $post->tagLinks()); ?>

            <?php endif; ?>
        </p>
        <p class="postSubtitle">
            <?php echo e(str_limit($post->subtitle, config('blog.frontend_trim_width'))); ?>

        </p>
        <p style="font-size: 13px"><a href="<?php echo e($post->url($tag)); ?>">READ MORE...</a></p>
    </div>
    <hr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>