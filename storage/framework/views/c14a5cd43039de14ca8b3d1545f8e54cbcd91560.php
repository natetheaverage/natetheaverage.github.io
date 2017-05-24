<script>
    (function () {
        $('.datetime-picker').datetimepicker({
            format: '<?php echo e(isset($format) ? $format : "YYYY-MM-DD HH:mm:ss"); ?>',
            defaultDate: Date.now(),
            keepOpen: true
        });
    })()
</script>
