
<div class="alpha"> </div>
 <?php if( ! have_posts() ) : ?>
   There is no content Here
 <?php endif; ?>
 <?php while( have_posts() ) : the_post(); ?>
 <div class="post grid_9">
   <h3 class="post-title"><?php the_title(); ?></h3>
   <div class="post-content"><?php the_content(); ?></div>
 </div>
 <?php endwhile; ?>
 <div class="omega"> </div>
