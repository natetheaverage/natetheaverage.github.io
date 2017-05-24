<head>
        <meta charset="utf-8">
        
        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
       
        <title>NateTheAverage</title>

        <?php echo $__env->make('canvas::frontend.shared.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('canvas::frontend.shared.partials.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200" rel="stylesheet" type="text/css">

        <!-- js video player -->
        <link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">
        <script src="//vjs.zencdn.net/5.19/video.min.js"></script>

         <!-- <script type="text/javascript" src=js/svgAnime.js></script> -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/simple-scrollbar.css" rel="stylesheet" type="text/css">
    </head>