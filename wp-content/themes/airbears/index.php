<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="author" content="AirBears" />
		<meta name="description" content="Using drone technology to benefit all life." />
		<title><?php echo get_bloginfo('name'); ?></title>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	</head>
	<body>

		<?php get_template_part('nav'); ?>

		<?php if(is_home()): ?>
			<?php get_template_part('hero'); ?>
		<?php else: ?>
			<?php get_template_part('header'); ?>
		<?php endif; ?>

		<?php get_template_part('main'); ?>

		<?php get_template_part('footer'); ?>

	</body>
</html>
