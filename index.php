<?php
get_header();
?>
<!-- MAIN CONTENT START -->
<div class="grid_9 page">
  <?php get_template_part('loop', 'index'); ?>
</div>
<!-- MAIN CONTENT END -->

<?php 
get_sidebar();
get_footer();
?>
