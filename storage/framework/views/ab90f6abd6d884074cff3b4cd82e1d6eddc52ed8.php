<form class="keyboard-save" role="form" method="POST" id="settings" action="<?php echo route('canvas.admin.settings'); ?>">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">Blog Title</label>
            <input type="text" class="form-control" name="blog_title" id="blog_title" value="<?php echo e($data['blogTitle']); ?>" placeholder="Blog Title">
        </div>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">Blog Subtitle</label>
            <input type="text" class="form-control" name="blog_subtitle" id="blog_subtitle" value="<?php echo e($data['blogSubtitle']); ?>" placeholder="Blog Subtitle">
        </div>
        <small>In a few words, explain what this site is about.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">Blog Description</label>
            <input type="text" class="form-control" name="blog_description" id="blog_description" value="<?php echo e($data['blogDescription']); ?>" placeholder="Blog Description">
        </div>
        <small>Set the blog description that you would like to add to the <code>description</code> meta tag.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">Blog SEO</label>
            <input type="text" class="form-control" name="blog_seo" id="blog_seo" value="<?php echo e($data['blogSeo']); ?>" placeholder="Blog SEO">
        </div>
        <small>Define in comma-delimited form the blog SEO tags that you want in the <code>keywords</code> meta tag.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">Blog Author</label>
            <input type="text" class="form-control" name="blog_author" id="blog_author" value="<?php echo e($data['blogAuthor']); ?>" placeholder="Blog Author">
        </div>
        <small>Set the name that you want to appear in the <code>author</code> meta tag.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label">Social Header Icons</label>
            <select name="social_header_icons_user_id" id="social_header_icons_user_id" class="selectpicker">
                <?php $__currentLoopData = \Canvas\Models\User::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option <?php if($user->id == $data['socialHeaderIconsUserId']): ?> selected <?php endif; ?> value="<?php echo $user->id; ?>"><?php echo $user->display_name; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <small>Select the user whose social icons you would like to appear in the header of the blog.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-disqus"></i> Disqus</label>
            <input type="text" class="form-control" name="disqus_name" id="disqus_name" value="<?php echo e($data['disqus']); ?>" placeholder="Disqus Shortname">
        </div>
        <small>Enter your Disqus shortname to enable comments in your blog posts or <a href="https://cnvs.readme.io/docs/options#section-disqus" target="_blank">learn more about this option</a>.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-trending-up"></i> Google Analytics</label>
            <input type="text" class="form-control" name="ga_id" id="ga_id" value="<?php echo e($data['analytics']); ?>" placeholder="Google Analytics Tracking ID">
        </div>
        <small>Enter your Google Analytics Tracking ID or <a href="https://cnvs.readme.io/docs/options#section-google-analytics" target="_blank">learn more about this option</a>.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-twitter-box"></i> Twitter Card Type</label>
            <select name="twitter_card_type" id="twitter_card_type" class="selectpicker">
                <option <?php if($data['twitterCardType'] == "none"): ?> selected <?php endif; ?> value="none">No card</option>
                <option <?php if($data['twitterCardType'] == "summary"): ?> selected <?php endif; ?> value="summary">Summary card</option>
                <option <?php if($data['twitterCardType'] == "summary_large_image"): ?> selected <?php endif; ?> value="summary_large_image">Summary card with large image</option>
            </select>
        </div>
        <small>Configure the way Twitter <a href="https://cards-dev.twitter.com/validator" target="_blank">displays links to your blog</a> or <a href="https://dev.twitter.com/cards/overview" target="_blank">learn more about this option</a>.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-invert-colors"></i> Theme</label>
            <select name="theme" id="theme" class="selectpicker">
                <option <?php if($data['active_theme'] == "default"): ?> selected <?php endif; ?> value="default"><?php echo $data['default_theme_name']; ?></option>
                <?php $__currentLoopData = $data['themes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $themeId => $themeName): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <option <?php if($data['active_theme'] == $themeId): ?> selected <?php endif; ?> value="<?php echo $themeId; ?>"><?php echo e($themeName); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </select>
        </div>
        <small>Change the appearance of your blog with Canvas themes.</small>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-language-css3"></i> Custom CSS</label>
            <textarea class="form-control" rows="10" name="custom_css" id="custom_css" style="resize: vertical" placeholder="Define your own CSS styles for the blog here."><?php echo e($data['custom_css']); ?></textarea>
        </div>
    </div>

    <br>

    <div class="form-group">
        <div class="fg-line">
            <label class="fg-label"><i class="zmdi zmdi-language-javascript"></i> Custom JS</label>
            <textarea class="form-control" rows="10" name="custom_js" id="custom_js" style="resize: vertical" placeholder="Define your own JS scripts for the blog here."><?php echo e($data['custom_js']); ?></textarea>
        </div>
    </div>

    <br>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-icon-text"><i class="zmdi zmdi-floppy"></i> Save Changes</button>
    </div>
</form>
