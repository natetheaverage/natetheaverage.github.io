<ul class="pager">
    
    <?php if($reverse_direction): ?>
        <?php if($posts->currentPage() > 1): ?>
            <li class="previous">
                <a href="<?php echo $posts->url($posts->currentPage() - 1); ?>">
                    <i class="fa fa-angle-left fa-lg"></i>
                    Previous <?php echo e($tag->tag); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if($posts->hasMorePages()): ?>
            <li class="next">
                <a href="<?php echo $posts->nextPageUrl(); ?>">
                    Next <?php echo e($tag->tag); ?>

                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        <?php endif; ?>
    <?php else: ?>
        <?php if($posts->currentPage() > 1): ?>
            <li class="previous">
                <a href="<?php echo $posts->url($posts->currentPage() - 1); ?>">
                    <i class="fa fa-angle-left fa-lg"></i>
                    Newer <?php echo e($tag ? $tag->tag : ''); ?>

                </a>
            </li>
        <?php endif; ?>
        <?php if($posts->hasMorePages()): ?>
            <li class="next">
                <a href="<?php echo $posts->nextPageUrl(); ?>">
                    Older <?php echo e($tag ? $tag->tag : ''); ?>

                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        <?php endif; ?>
    <?php endif; ?>
</ul>