<div class="card">
    <div class="card-header">
        <h2>Recent Activity
            <small>Last 4 published blog posts:</small>
        </h2>

        <br>

        <?php $__currentLoopData = $data['recentPosts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <a href="<?php echo route('canvas.admin.post.edit', $post->id); ?>"><?php echo e($post->title); ?></a> <small><?php echo e($post->created_at->format('M d, Y')); ?> at <?php echo e($post->created_at->format('g:i A')); ?></small>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
</div>