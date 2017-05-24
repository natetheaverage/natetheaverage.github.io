<table class="table table-condensed table-vmiddle">
    <thead>
    <tr>
        <th>Content Type</th>
        <th>Title</th>
        <th>Created</th>
        <th>Last Updated</th>
    </tr>
    </thead>
    <tbody>
    <?php if(empty($posts->toArray()) && empty($tags->toArray()) && empty($users->toArray())): ?>
        <tr>
            <td>No results found.</td>
            <td></td>
            <td></td>
        </tr>
    <?php else: ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><i class="zmdi zmdi-book"></i>&nbsp;&nbsp;Post</td>
                <td><a href="<?php echo route('canvas.admin.post.edit', $post->id); ?>"><?php echo e($post->title); ?></a></td>
                <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('M d, Y')); ?></td>
                <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at)->format('M d, Y')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><i class="zmdi zmdi-label"></i>&nbsp;&nbsp;Tag</td>
                <td><a href="<?php echo route('canvas.admin.tag.edit', $tag->id); ?>"><?php echo e($tag->title); ?></a></td>
                <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->created_at)->format('M d, Y')); ?></td>
                <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $tag->updated_at)->format('M d, Y')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><i class="zmdi zmdi-account"></i>&nbsp;&nbsp;User</td>
                <td><a <?php if(Auth::guard('canvas')->user()->id === $user->id): ?> href="<?php echo route('canvas.admin.profile.index'); ?>" <?php else: ?> href="<?php echo route('canvas.admin.user.edit', $user->id); ?>" <?php endif; ?>><?php echo e($user->display_name); ?></a></td>
                <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('M d, Y')); ?></td>
                <td><?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->updated_at)->format('M d, Y')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    <?php endif; ?>

    </tbody>
</table>