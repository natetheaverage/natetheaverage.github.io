<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Tags</title>
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
                            <li class="active">Tags</li>
                        </ol>
                        <ul class="actions">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="<?php echo route('canvas.admin.tag.index'); ?>"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> Refresh Tags</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php echo $__env->make('canvas::backend.shared.partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('canvas::backend.shared.partials.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <h2>Tags&nbsp;
                            <a href="<?php echo route('canvas.admin.tag.create'); ?>" id="create-tag"><i class="zmdi zmdi-plus-circle" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Create a new tag"></i></a>
                            <small>This page provides a comprehensive overview of all your blog tags. Click the <span class="zmdi zmdi-edit text-primary"></span> icon next to each tag to update its contents.</small>
                        </h2>
                    </div>

                    <div class="table-responsive">
                        <table id="tags" class="table table-condensed table-vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric" data-order="desc">Id</th>
                                    <th data-column-id="title">Title</th>
                                    <th data-column-id="subtitle">Subtitle</th>
                                    <th data-column-id="layout">Layout</th>
                                    <th data-column-id="direction">Direction</th>
                                    <th data-column-id="created" data-type="date">Created</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <tr>
                                        <td><?php echo $tag->id; ?></td>
                                        <td><?php echo $tag->title; ?></td>
                                        <td class="hidden-sm"><?php echo str_limit($tag->subtitle, config('blog.backend_trim_width')); ?></td>
                                        <td class="hidden-md"><?php echo e($tag->layout); ?></td>
                                        <td class="hidden-sm">
                                            <?php if($tag->reverse_direction): ?>
                                                Reverse
                                            <?php else: ?>
                                                Normal
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $tag->created_at->format('M d, Y'); ?></td>
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
    <?php echo $__env->make('canvas::backend.tag.partials.datatable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php if(Session::get('_new-tag')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_new-tag'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo \Session::forget('_new-tag'); ?>

    <?php endif; ?>

    <?php if(Session::get('_delete-tag')): ?>
        <?php echo $__env->make('canvas::backend.shared.notifications.notify', ['section' => '_delete-tag'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo \Session::forget('_delete-tag'); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>