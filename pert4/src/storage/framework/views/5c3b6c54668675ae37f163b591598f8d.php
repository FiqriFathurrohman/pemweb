<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<html lang="en-us">
<?php echo $__env->make('components.partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<body>

<?php echo $__env->make('components.partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo e($slot); ?>


<?php echo $__env->make('components.partials.bottom', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
<?php echo $__env->make('components.partials.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</html><?php /**PATH /var/www/html/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>