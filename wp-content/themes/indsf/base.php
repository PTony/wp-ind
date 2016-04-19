<?php 
/* 
Template Name: Base
*/ 
?>

	<?php get_header(); ?>

<div class="col-md-12 template1">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="titre_info"><h3><?php the_title(); ?></h3></div>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
 </div>

	<?php get_footer(); ?>

