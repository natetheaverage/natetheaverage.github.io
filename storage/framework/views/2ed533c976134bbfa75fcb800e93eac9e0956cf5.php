<div class="card">
    <div class="card-header">
        <h2>Canvas News
            <small>Stay up to date with everything Canvas!</small>
        </h2>
        <br>
        <div class="panel-group" role="tablist" aria-multiselectable="true">
            <div class="panel panel-collapse">
                <?php echo $__env->make('canvas::backend.home.partials.news.patreon', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="panel panel-collapse">
                <?php echo $__env->make('canvas::backend.home.partials.news.update-v2-1-13', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="panel panel-collapse">
                <?php echo $__env->make('canvas::backend.home.partials.news.proengsoft-issues', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="panel panel-collapse">
                <?php echo $__env->make('canvas::backend.home.partials.news.update-v2-1-5', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>