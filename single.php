<?php get_header(); ?>

<h1 class="mv0 f2 lh-title"><?php the_title(); ?></h1>

<?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; endif;
?>

<?php get_footer(); ?>
