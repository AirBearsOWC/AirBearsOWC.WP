
<header>
	<h1><?php echo get_bloginfo('name'); ?></h1>
	<p><?php echo get_bloginfo('description'); ?></p>
</header>

<?php $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['nav-bar']); ?>
<nav>
	<ul>
<?php foreach($menu_items as $item): ?>
		<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
<?php endforeach; ?>
	</ul>
</nav>
