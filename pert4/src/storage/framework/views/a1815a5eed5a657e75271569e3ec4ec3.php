<?php
    $footer = \App\Models\Footer::first();
?>


<footer class="section-sm bg-tertiary">
	<div class="container">
        <div class="container d-flex justify-content-center">
            <a wire:navigate href="<?php echo e(route ('home')); ?>"> <?php echo e($footer->label ?? ''); ?></a>
        </div>
	</div>
</footer><?php /**PATH /var/www/html/resources/views/components/partials/bottom.blade.php ENDPATH**/ ?>