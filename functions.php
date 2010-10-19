<?php

add_action('after_setup_theme', 'nerdherd_init');
function nerdherd_init () {
  add_theme_support('post-thumbnails');
}

add_action('widgets_init', 'nerdherd_widgets_init');
function nerdherd_widgets_init () {
  register_sidebar( array(
			   'name' => 'Sidebar Widget area',
			   'id' => 'sidebar-widget',
			   'description' => 'Sidebar Widget',
			   'before_widget' => '<div class="grid_3 widget">',
			   'after_widget' => '</div><div class="clear"> </div>',
			   'before_title' => '<h3 class="widget-title">',
			   'after_title' => '</h3>'
			   ));

  register_sidebar( array(
			  'name' => 'Footer Widgets',
			  'id' => 'footer-widgets',
			  'description' => 'Footer Widgets (should be mostly empty)',
			  'before_widget' => '',
			  'after_widget' => '',
			  'before_title' => '',
			  'after_title' => ''
			  ));
}