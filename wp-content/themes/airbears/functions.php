<?php

function add_nav_bar(){
	register_nav_menu('nav-bar', 'Navigation bar');
}
add_action('init', 'add_nav_bar');

?>
