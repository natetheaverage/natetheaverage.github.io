<form role="form" id="forgot-password" method="POST" action="<?php echo e(route('canvas.auth.password.forgot.store')); ?>">
    <?php echo csrf_field(); ?>


    <?php if(session()->has('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>

    <div class="form-group fg-line">
        <input type="email" id="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block m-t-10">Send Reset Link</button>
    <div style="text-align: center">
        <a href="<?php echo route('canvas.admin'); ?>" class="btn btn-link m-t-10">Sign In</a><a href="<?php echo route('canvas.home'); ?>" class="btn btn-link m-t-10">Back to Blog</a>
    </div>
</form>