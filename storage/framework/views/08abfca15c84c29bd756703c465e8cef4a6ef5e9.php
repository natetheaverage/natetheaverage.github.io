<div class="container-fluid">
    <?php if(!empty(\Canvas\Models\Settings::disqus())): ?>
        <?php echo $__env->make('canvas::frontend.blog.partials.disqus', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <div style="text-align: center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <hr>
                <p class="small">
                <?php if(!empty($socialHeaderIconsUser->twitter)): ?>
                <a href="http://twitter.com/<?php echo e($socialHeaderIconsUser->twitter); ?>" target="_blank" id="social"><i class="fa fa-fw fa-twitter text-muted" style="font-size: 14px"></i></a>
            <?php endif; ?>
            <?php if(!empty($socialHeaderIconsUser->facebook)): ?>
                <a href="http://facebook.com/<?php echo e($socialHeaderIconsUser->facebook); ?>" target="_blank" id="social"><i class="fa fa-fw fa-facebook text-muted" style="font-size: 14px"></i></a>
            <?php endif; ?>
            <?php if(!empty($socialHeaderIconsUser->github)): ?>
                <a href="http://github.com/<?php echo e($socialHeaderIconsUser->github); ?>" target="_blank" id="social"><i class="fa fa-fw fa-github text-muted" style="font-size: 14px"></i></a>
            <?php endif; ?>
            <?php if(!empty($socialHeaderIconsUser->linkedin)): ?>
                <a href="http://linkedin.com/in/<?php echo e($socialHeaderIconsUser->linkedin); ?>" target="_blank" id="social"><i class="fa fa-fw fa-linkedin text-muted" style="font-size: 14px"></i></a>
            <?php endif; ?>
                 <a href="<?php echo route('canvas.admin'); ?>"><i class="fa fa-lock"></i> Sign In</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- scroll to top button -->
<span id="top-link-block" class="hidden hover-button">
    <a id="scroll-to-top" href="#top">SCROLL TO TOP</a>
</span>

<?php if(!empty(\Canvas\Models\Settings::gaId())): ?>
    <?php echo $__env->make('canvas::frontend.blog.partials.analytics', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>