<?php if(Route::has('login')): ?>
      <div class="top-right links">
          <?php if(Auth::check()): ?>
              <a href="<?php echo e(url('/home')); ?>">Home</a>
          <?php else: ?>
              <a href="<?php echo e(url('/login')); ?>">Login</a>
              <a href="<?php echo e(url('/register')); ?>">Register</a>
          <?php endif; ?>
      </div>
  <?php endif; ?>