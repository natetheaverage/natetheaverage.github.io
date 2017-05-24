<aside id="sidebar" class="sidebar c-overflow">
    <div class="profile-menu">
        <a href="">
            <div class="profile-pic">
                <img src="https://www.gravatar.com/avatar/<?php echo md5(Auth::guard('canvas')->user()->email); ?>?d=identicon">
            </div>
            <div class="profile-info">
                <?php echo e(Auth::guard('canvas')->user()->display_name); ?>

                <i class="zmdi zmdi-caret-down"></i>
            </div>
        </a>
        <ul class="main-menu profile-ul">
            <li <?php if(Route::is('canvas.admin.profile.index')): ?> class="active" <?php endif; ?>><a href="<?php echo route('canvas.admin.profile.index'); ?>"><i class="zmdi zmdi-account"></i> Your Profile</a></li>
            <li><a href="<?php echo route('canvas.auth.logout'); ?>" name="logout"><i class="zmdi zmdi-power"></i> Sign out</a></li>
        </ul>
    </div>
    <ul class="main-menu main-ul">
        <li <?php if(Route::is('canvas.admin')): ?> class="active" <?php endif; ?>><a href="<?php echo route('canvas.admin'); ?>"><i class="zmdi zmdi-home"></i> Home</a></li>
        <li class="sub-menu <?php if(Route::is('canvas.admin.post.index') || Route::is('canvas.admin.post.create') || Route::is('canvas.admin.post.edit')): ?>active toggled <?php endif; ?>">
            <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-collection-bookmark"></i> Posts</a>
            <ul>
                <li><a href="<?php echo route('canvas.admin.post.index'); ?>" <?php if(Route::is('canvas.admin.post.index') || Route::is('canvas.admin.post.edit')): ?> class="active" <?php endif; ?>>All Posts <span class="label label-default label-totals"><?php echo Canvas\Models\Post::count(); ?></span></a></li>
                <li><a href="<?php echo route('canvas.admin.post.create'); ?>" <?php if(Route::is('canvas.admin.post.create')): ?> class="active" <?php endif; ?>>Add New</a></li>
            </ul>
        </li>
        <li class="sub-menu <?php if(Route::is('canvas.admin.tag.index') || Route::is('canvas.admin.tag.create') || Route::is('canvas.admin.tag.edit')): ?>active toggled <?php endif; ?>">
            <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-labels"></i> Tags</a>
            <ul>
                <li><a href="<?php echo route('canvas.admin.tag.index'); ?>" <?php if(Route::is('canvas.admin.tag.index') || Route::is('canvas.admin.tag.edit')): ?> class="active" <?php endif; ?>>All Tags <span class="label label-default label-totals"><?php echo Canvas\Models\Tag::count(); ?></span></a></li>
                <li><a href="<?php echo route('canvas.admin.tag.create'); ?>" <?php if(Route::is('canvas.admin.tag.create')): ?> class="active" <?php endif; ?>>Add New</a></li>
            </ul>
        </li>
        <li <?php if(Request::is('admin/upload')): ?> class="active" <?php endif; ?>><a href="<?php echo route('canvas.admin.upload'); ?>"><i class="zmdi zmdi-collection-folder-image"></i> Media</a></li>
        <?php if(\Canvas\Models\User::isAdmin(Auth::guard('canvas')->user()->role)): ?>
            <li class="sub-menu <?php if(Route::is('canvas.admin.user.index') || Route::is('canvas.admin.user.create') || Route::is('canvas.admin.user.edit')): ?>active toggled <?php endif; ?>">
                <a href="" data-ma-action="submenu-toggle"><i class="zmdi zmdi-accounts-alt"></i> Users</a>
                <ul>
                    <li><a href="<?php echo route('canvas.admin.user.index'); ?>" <?php if(Route::is('canvas.admin.user.index') || Route::is('canvas.admin.user.edit')): ?> class="active" <?php endif; ?>>All Users <span class="label label-default label-totals"><?php echo Canvas\Models\User::count(); ?></span></a></li>
                    <li><a href="<?php echo route('canvas.admin.user.create'); ?>" <?php if(Route::is('canvas.admin.user.create')): ?> class="active" <?php endif; ?>>Add New</a></li>
                </ul>
            </li>
            <li <?php if(Route::is('canvas.admin.tools')): ?> class="active" <?php endif; ?>><a href="<?php echo route('canvas.admin.tools'); ?>"><i class="zmdi zmdi-wrench"></i> Tools</a></li>
            <li <?php if(Route::is('canvas.admin.settings')): ?> class="active" <?php endif; ?>><a href="<?php echo route('canvas.admin.settings'); ?>"><i class="zmdi zmdi-settings"></i> Settings</a></li>
        <?php endif; ?>
        <li <?php if(Route::is('canvas.admin.help')): ?> class="active" <?php endif; ?>><a href="<?php echo route('canvas.admin.help'); ?>"><i class="zmdi zmdi-help"></i> Help</a></li>
    </ul>
</aside>
