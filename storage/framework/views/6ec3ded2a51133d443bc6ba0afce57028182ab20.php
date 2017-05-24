<?php if(Session::has('success')): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong><i class="zmdi zmdi-check-circle"></i>&nbsp;Success!</strong>
        <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>