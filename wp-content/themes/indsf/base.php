<?php 
/* 
Template Name: Base
*/ 
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class=".container__header .header .header-title"><h2><?php the_title(); ?></h2></div>

    <div>

    <?php the_content(); ?>

    </div>

    <?php endwhile; ?>

    <?php endif; ?>

<?php get_footer(); ?>

