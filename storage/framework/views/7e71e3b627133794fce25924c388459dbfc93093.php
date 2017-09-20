<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Posts</title>
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
                            <li class="active">Posts</li>
                        </ol>
                        <ul class="actions">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="<?php echo route('canvas.admin.post.index'); ?>"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> Refresh Posts</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php echo $__env->make('canvas::backend.shared.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('canvas::backend.shared.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <h2>Posts&nbsp;
                            <a href="<?php echo route('canvas.admin.post.create'); ?>" id="create-post"><i class="zmdi zmdi-plus-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Create a new post"></i></a>

                            <small>This page provides a comprehensive overview of all your blog posts. Click the <span class="zmdi zmdi-edit text-primary"></span> icon next to each post to update its contents or the <span class="zmdi zmdi-search text-primary"></span> icon to see what it looks like to your readers.</small>
                        </h2>
                    </div>

                    <div class="table-responsive">
                        <table id="posts" class="table table-condensed table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric" data-order="desc">ID</th>
                                    <th data-column-id="title">Title</th>
                                    <th data-column-id="author">Author</th>
                                    <th data-column-id="published">Status</th>
                                    <th data-column-id="slug">Slug</th>
                                    <th data-column-id="date" data-type="date" data-formatter="humandate">Date</th>
                                    <th data-column-id="edit_url" data-sortable="false" data-visible="false">Edit URL</th>
                                    <th data-column-id="view_url" data-sortable="false" data-visible="false">View URL</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <tr>
                                        <td><?php echo e($post->id); ?></td>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e($post->getAuthor($post->user_id)); ?></td>
                                        <td><?php echo e($post->is_published == 1 ? '<span class="label label-primary">Published</span>' : '<span class="label label-default">Draft</span>'); ?></td>
                                        <td><?php echo e($post->slug); ?></td>
                                        <?php if($post->updated_at != $post->created_at): ?>
                                            <td><?php echo e($post->updated_at->format('Y/m/d') . "<br/>"); ?> Last updated</td>
                                        <?php else: ?>
                                            <td><?php echo e($post->created_at->format('Y/m/d') . "<br/>"); ?> Published</td>
                                        <?php endif; ?>
                                        <td><?php echo route('canvas.admin.post.edit', $post->id); ?></td>
                                        <td><?php echo route('canvas.blog.post.show', $post->slug); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <?php if(Session::get('_delete-post')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_delete-post'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_delete-post')); ?>

    <?php endif; ?>
    <?php if(Session::get('_update-post')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_update-post'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo e(\Session::forget('_update-post')); ?>

    <?php endif; ?>
    <?php echo $__env->make('canvas::backend.post.partials.datatable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>