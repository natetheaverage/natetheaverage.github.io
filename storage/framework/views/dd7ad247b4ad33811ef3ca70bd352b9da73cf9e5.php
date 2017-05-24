<meta charset="utf-8">

<!-- SEO Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="<?php echo e(\Canvas\Models\Settings::blogSeo()); ?>">
<meta name="author" content="<?php echo e(\Canvas\Models\Settings::blogAuthor()); ?>">
<meta name="description" content="<?php echo e(\Canvas\Models\Settings::blogDescription()); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon -->
<link rel="icon" type="image/png" href="<?php echo e(asset('vendor/canvas/assets/images/favicon.png')); ?>">

<!-- Facebook Open Graph Tags -->
<?php echo $__env->yieldContent('og-title'); ?>
<?php echo $__env->yieldContent('og-image'); ?>
<?php echo $__env->yieldContent('og-description'); ?>
<meta name="og:type" content="blog">
<meta name="og:site_name" content="<?php echo e(\Canvas\Models\Settings::blogTitle()); ?>">

<!-- Twitter Cards -->
<?php if(Request::is('blog/*')): ?>
    <?php echo $__env->yieldContent('twitter-card'); ?>
<?php else: ?>
    <meta name="twitter:site" content="<?php echo e(isset($user->twitter) ? $user->twitter : ''); ?>" />
    <meta name="twitter:title" content="<?php echo e(\Canvas\Models\Settings::blogTitle()); ?>" />
    <meta name="twitter:card" content="<?php echo e(\Canvas\Models\Settings::twitterCardType()); ?>" />
    <meta name="twitter:image" content="<?php echo e(url('vendor/canvas/assets/images/favicon.png')); ?>" />
    <meta name="twitter:description" content="<?php echo e(\Canvas\Models\Settings::blogDescription()); ?>" />
<?php endif; ?>
