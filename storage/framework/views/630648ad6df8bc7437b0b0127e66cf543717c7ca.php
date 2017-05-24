<?php $__env->startSection('title'); ?>
    <title><?php echo e(\Canvas\Models\Settings::blogTitle()); ?> | Media</title>
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
                            <li class="active">Media</li>
                        </ol>
                        <ul class="actions">
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="<?php echo route('canvas.admin.upload'); ?>"><i class="zmdi zmdi-refresh-alt pd-r-5"></i> Refresh Media</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h2>Media Library
                            <small>All the files you’ve uploaded are listed alphabetically in the Media Library. Double-click a folder name to
                                see its contents.
                            </small>
                        </h2>
                    </div>

                    <media-manager></media-manager>
                </div>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('unique-js'); ?>
    <script>
        new Vue({
            el: '#main',
            created: function () {
                window.eventHub.$on('media-manager-notification', function (message, type, time) {
                    $.growl({
                        message: message
                    }, {
                        type: 'inverse',
                        allow_dismiss: false,
                        label: 'Cancel',
                        className: 'btn-xs btn-inverse',
                        placement: {
                            from: 'top',
                            align: 'right'
                        },
                        delay: time,
                        animate: {
                            enter: 'animated fadeInRight',
                            exit: 'animated fadeOutRight'
                        },
                        offset: {
                            x: 20,
                            y: 85
                        }
                    });
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('canvas::backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>