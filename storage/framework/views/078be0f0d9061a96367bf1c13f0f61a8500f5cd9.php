<?php if(isset($errors) && count($errors) > 0): ?>
    <div class="alert alert-danger">
        <strong><i class="zmdi zmdi-close-circle"></i>&nbsp;Whoops! </strong>There were some problems with your input.
        <br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    </div>
<?php endif; ?>