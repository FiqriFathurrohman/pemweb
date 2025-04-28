<?php
    $seo = \App\Models\Seo::first();
?>


<head>
	<meta charset="utf-8">
	<title><?php echo e($seo->title ?? 'Default Title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="<?php echo e($seo->description ?? 'Default description'); ?>">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<meta name="keywords" content="<?php echo e($seo->keywords ?? 'Default, Keywords'); ?>">

	<?php if(!empty($seo->canonical_url)): ?>
		<link rel="canonical" href="<?php echo e($seo->canonical_url); ?>">
	<?php endif; ?>

	<meta name="robots" content="<?php echo e($seo->robots ?? 'index, follow'); ?>">
	
	<?php if(!empty($seo->og_image)): ?>
		<meta property="og:image" content="<?php echo e(asset('storage/' . $seo->og_image)); ?>">
	<?php endif; ?>
	
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="<?php echo e(asset('front/plugins/slick/slick.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('front/plugins/font-awesome/fontawesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('front/plugins/font-awesome/brands.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('front/plugins/font-awesome/solid.css')); ?>">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="<?php echo e(asset('front/css/style.css')); ?>">
</head><?php /**PATH /var/www/html/resources/views/components/partials/head.blade.php ENDPATH**/ ?>