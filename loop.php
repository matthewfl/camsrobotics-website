
<div class="alpha"> </div>
 <?php if( ! have_posts() ) : ?>
   fail
 <?php endif; ?>
 <?php while( have_posts() ) : the_post(); ?>
 <div class="grid_9">
   <h3><?php the_title(); ?></h3>
   <div><?php the_content(); ?></div>
 </div>
 <?php endwhile; ?>
 <div class="omega"> </div>
