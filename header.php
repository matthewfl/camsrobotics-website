<html>
  <head>
    <title><?php wp_title(); ?></title>
    <!--link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" -->
    <link rel="stylesheet/less" href="<?php bloginfo('template_url'); ?>/style.less" type="text/css">
    <script src="<?php bloginfo('template_url'); ?>/less.js" ></script>
    <script src="<?php bloginfo('template_url'); ?>/jquery.js" ></script>
    <script src="<?php bloginfo('template_url'); ?>/base.js" ></script>
  </head>
  <body>
    <div class="container_12">
      <div id="head" class="grid_12">
	<div id="header">Nerd Herd</div>
      </div>
      <div class="break"> </div>
      <!-- List Pages -->
      <div class="plist grid_12">
	<ul id="topLinks">
   <?php
   wp_list_pages(array(
		       'depth' => 0,
		       'title_li' => ''
		       ));
?>
	</ul>
      </div>
      <div class="break"> </div>
