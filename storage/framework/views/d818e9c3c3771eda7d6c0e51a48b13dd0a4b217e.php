<div class="card">
    <div class="card-header">
        <h2>At a Glance
            <small>Quick snapshot of your site:</small>
        </h2>
        <br>
        <ul class="getting-started">
            <li>
                <i class="zmdi zmdi-collection-bookmark"></i> <a href="<?php echo route('canvas.admin.post.index'); ?>"><?php echo count($data['posts']); ?><?php echo str_plural(' Post', count($data['posts'])); ?></a>
            </li>
            <li>
                <i class="zmdi zmdi-labels"></i> <a href="<?php echo route('canvas.admin.tag.index'); ?>"><?php echo count($data['tags']); ?><?php echo str_plural(' Tag', count($data['tags'])); ?></a>
            </li>
            <li>
                <i class="zmdi zmdi-accounts-alt"></i> <a href="<?php echo route('canvas.admin.user.index'); ?>"><?php echo count($data['users']); ?><?php echo str_plural(' User', count($data['users'])); ?></a>
            </li>
            <li>
                <?php if($data['status'] === Canvas\Helpers\CanvasHelper::MAINTENANCE_MODE_DISABLED): ?>
                    <i class="zmdi zmdi-globe-alt"></i> <a href="<?php echo route('canvas.admin.tools'); ?>"><span class="label label-success">Status: <?php echo strtoupper('Active'); ?></span></a>
                <?php else: ?>
                    <i class="zmdi zmdi-globe-alt"></i> <a href="<?php echo route('canvas.admin.tools'); ?>"><span class="label label-warning">Status: <?php echo strtoupper('Maintenance Mode'); ?></span></a>
                <?php endif; ?>
            </li>
            <li>
                <?php if(isset($data['disqus']) && strlen($data['disqus'])): ?>
                    <i class="zmdi zmdi-disqus"></i> <a href="<?php echo route('canvas.admin.settings'); ?>"><span class="label label-success">Disqus: <?php echo strtoupper('Enabled'); ?></span></a>
                <?php else: ?>
                    <i class="zmdi zmdi-disqus"></i> <a href="<?php echo route('canvas.admin.settings'); ?>"><span class="label label-danger">Disqus: <?php echo strtoupper('Disabled'); ?></span></a>
                <?php endif; ?>
            </li>
            <li>
                <?php if(isset($data['analytics']) && strlen($data['analytics'])): ?>
                    <i class="zmdi zmdi-trending-up"></i> <a href="<?php echo route('canvas.admin.settings'); ?>"><span class="label label-success">Google Analytics: <?php echo strtoupper('Enabled'); ?></span></a>
                <?php else: ?>
                    <i class="zmdi zmdi-trending-up"></i> <a href="<?php echo route('canvas.admin.settings'); ?>"><span class="label label-danger">Google Analytics: <?php echo strtoupper('Disabled'); ?></span></a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>
