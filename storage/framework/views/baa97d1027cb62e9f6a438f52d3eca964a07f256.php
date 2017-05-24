<img style="margin: 0 15px 0 0" class="img-responsive img-circle author-img" src="https://www.gravatar.com/avatar/<?php echo e(md5($user->email)); ?>?d=identicon&s=150" title="<?php echo e($user->first_name .  ' ' . $user->last_name); ?>">
<div id="author-content">
    <h4 id="auth-name"><strong><?php echo e($user->first_name .  ' ' . $user->last_name); ?></strong></h4>
    <span class="small">
        <?php echo e($user->bio); ?>

        <br>
        <?php if(!empty($user->twitter)): ?>
            <a href="https://twitter.com/<?php echo e($user->twitter); ?>" target="_blank" id="social"><i class="fa fa-fw fa-twitter text-muted"></i></a>
        <?php endif; ?>
        <?php if(!empty($user->facebook)): ?>
            <a href="https://facebook.com/<?php echo e($user->facebook); ?>" target="_blank" id="social"><i class="fa fa-fw fa-facebook text-muted"></i></a>
        <?php endif; ?>
        <?php if(!empty($user->github)): ?>
            <a href="https://github.com/<?php echo e($user->github); ?>" target="_blank" id="social"><i class="fa fa-fw fa-github text-muted"></i></a>
        <?php endif; ?>
        <?php if(!empty($user->linkedin)): ?>
            <a href="https://linkedin.com/in/<?php echo e($user->linkedin); ?>" target="_blank" id="social"><i class="fa fa-fw fa-linkedin text-muted"></i></a>
        <?php endif; ?>
    </span>
</div>