<!doctype html>
<html lang="en">
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
      <div id="app-container">
        <div class="container-fluid">
            <div>
              <a href="<?php echo route('canvas.blog.post.index'); ?>" class="btn">Full Directory</a>
            </div>
            <div class="row">
                <div class="logo">
                    <?php echo $__env->make('parts.svg-logo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
          </div>
          <div class="body-content container-flui text-center">
                <div class="row text-center ">
                    <div class="pre-title ">
                    Hi I'm Nathan Leite
                    </div>
                    <div class="pre-title">
                        AKA
                    </div>
                    <div class="title text-center">
                        NateTheAverage
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
              
              <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" data-setup="{}">
                <source src="storage/video/video.mp4" type='video/mp4'>
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>

          </div>

          
  <main-menu></main-menu>
            
    
        
        
       
        
        
      </div>
      <?php echo $__env->make('canvas::frontend.shared.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <script src="<?php echo e(elixir('vendor/canvas/assets/js/frontend.js')); ?>" charset="utf-8"></script>
        <script type="text/javascript" src="js/app.js"></script>
         <script src="http://vjs.zencdn.net/5.19.2/video.js"></script>
    </body>
   
</html>
