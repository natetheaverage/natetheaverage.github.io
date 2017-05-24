<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <br>
            <ul class="pager">
                <?php if($tag && $tag->reverse_direction): ?>
                    <?php if($post->olderPost($tag)): ?>
                        <li class="previous">
                            <a href="<?php echo $post->olderPost($tag)->url($tag); ?>">
                                <i class="fa fa-angle-left fa-lg"></i>
                                Previous <?php echo e($tag->tag); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($post->newerPost($tag)): ?>
                        <li class="next">
                            <a href="<?php echo $post->newerPost($tag)->url($tag); ?>">
                                Next <?php echo e($tag->tag); ?>

                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($post->newerPost($tag)): ?>
                        <li class="previous">
                            <a href="<?php echo $post->newerPost($tag)->url($tag); ?>">
                                <i class="fa fa-angle-left fa-lg"></i>
                                Newer
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if($post->olderPost($tag)): ?>
                        <li class="next">
                            <a href="<?php echo $post->olderPost($tag)->url($tag); ?>">
                                Older
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>