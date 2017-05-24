<?php if(isset($tag->title)): ?>
    <hr style="width: 60%">
    <p class="tag-link"><i class="fa fa-fw fa-tag"></i> Tagged in <a href="#"><?php echo e(isset($tag->title) ? $tag->title : ''); ?></a></p>
    <p class="tag-subtitle">" <?php echo e($tag->subtitle); ?> "</p>
    <hr style="width: 60%">
<?php endif; ?>