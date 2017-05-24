<div class="card">
    <div class="card-header">
        <h2>Welcome to Canvas!
            <small>Here are some helpful links we've gathered to get you started:
            </small>
        </h2>
    </div>
    <div class="card-body card-padding">
        <div class="row">
            <div class="col-sm-4">
                <h5>Getting Started</h5>
                <br>
                <a href="<?php echo route('canvas.admin.profile.index'); ?>" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-account"></i> Update your Profile</a>
                <br>
                <br>
                <a href="<?php echo route('canvas.admin.settings'); ?>" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-settings"></i> Configure your Settings</a>
                <br>
                <br>
            </div>
            <div class="col-sm-4">
                <h5>Next Steps</h5>
                <ul class="getting-started">
                    <li><i class="zmdi zmdi-comment-edit"></i> <a href="<?php echo route('canvas.admin.post.create'); ?>">Write your first blog post</a></li>
                    <li><i class="zmdi zmdi-plus-circle"></i> <a href="<?php echo route('canvas.admin.tag.create'); ?>">Create a new tag</a></li>
                    <li><i class="zmdi zmdi-view-web"></i> <a href="<?php echo route('canvas.home'); ?>" target="_blank">View your site</a></li>
                </ul>
                <br>
            </div>
            <div class="col-sm-4">
                <h5>More Actions</h5>
                <ul class="getting-started">
                    <li><i class="zmdi zmdi-disqus"></i> <a href="<?php echo route('canvas.admin.settings'); ?>">Disqus Integration</a></li>
                    <li><i class="zmdi zmdi-trending-up"></i> <a href="<?php echo route('canvas.admin.settings'); ?>">Google Analytics Setup</a></li>
                    <li><i class="zmdi zmdi-wrench"></i> <a href="<?php echo route('canvas.admin.tools'); ?>">Advanced Tools</a></li></a></li>
                </ul>
                <br>
            </div>
        </div>

        <?php if($data['canvasVersion'] !== $data['latestRelease']): ?>
            <hr>
            <p class="small" style="margin-bottom: 0;">
                <a href="<?php echo url('http://github.com/cnvs/easel/releases/tag/') . $data['latestRelease']; ?>" target="_blank"><i class="zmdi zmdi-alert-circle"></i>&nbsp;<strong>Canvas <?php echo $data['latestRelease']; ?></strong></a> is available! <a href="#" data-toggle="modal" data-target="#update"><strong>Please update now.</strong></a>
            </p>
        <?php endif; ?>

    </div>
</div>