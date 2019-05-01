<?php get_header(); ?>

<?php get_template_part('page-header') ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <div class="index-page divider__after">
       <div class="container">
           <?php the_content(); ?>
       </div>
   </div>
<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer(); ?>