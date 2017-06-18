<?php $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['footer-bar']); ?>

<footer>
	<a class="logo" href="<?php echo home_url(); ?>">
		<img src="<?php echo wp_get_attachment_image_src(get_theme_mod('custom_logo'))[0]; ?>" alt="Logo" />
		<?php echo get_bloginfo('name'); ?>
	</a>
<?php foreach($menu_items as $item): ?>
	<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
<?php endforeach; ?>
</footer>
