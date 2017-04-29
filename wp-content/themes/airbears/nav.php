<?php $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['nav-bar']); ?>
<nav>
	<a href="<?php echo home_url(); ?>">
		<?php echo get_bloginfo('name'); ?>
	</a>
<?php foreach($menu_items as $item): ?>
	<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
<?php endforeach; ?>
	<a href="#">Login</a>
</nav>
