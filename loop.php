
<div class="alpha"> </div>
 <?php if( ! have_posts() ) : ?>
   There is no content Here
 <?php endif; ?>
 <?php while( have_posts() ) : the_post(); ?>
 <div class="post grid_9">
   <h3 class="title"><?php the_title(); ?></h3>
   <div class="content"><?php the_content(); ?></div>
 </div>
<div class="break"> </div>
 <?php endwhile; ?>
 <div class="omega"> </div>
