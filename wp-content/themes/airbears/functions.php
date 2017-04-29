<?php

function add_menus(){
	register_nav_menu('nav-bar', 'Navigation bar');
	register_nav_menu('footer-bar', 'Footer bar');
}
add_action('init', 'add_menus');
add_theme_support('custom-logo');

?>
