<?php $nav_bar_left = wp_get_nav_menu_items(get_nav_menu_locations()['nav-bar-left']); ?>
<?php $nav_bar_right = wp_get_nav_menu_items(get_nav_menu_locations()['nav-bar-right']); ?>
<nav>
	<a class="logo" href="<?php echo home_url(); ?>">
		<img src="<?php echo wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0]; ?>" alt="Logo" />
		<?php echo get_bloginfo('name'); ?>
	</a>
<?php foreach($nav_bar_left as $item): ?>
	<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
<?php endforeach; ?>
	<span class="space">&nbsp;</span>
<?php foreach($nav_bar_right as $item): ?>
	<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
<?php endforeach; ?>
	<a href="#">Login</a>
</nav>
