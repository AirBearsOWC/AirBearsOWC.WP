<?php $menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['footer-bar']); ?>

<footer>
	<p>This is the footer.</p>
	<ul>
<?php foreach($menu_items as $item): ?>
		<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
<?php endforeach; ?>
	</ul>
</footer>
