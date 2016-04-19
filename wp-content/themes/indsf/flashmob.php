

<?php get_header(); ?>

<?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>

<h2><?php the_title(); ?>FlashMob</h2>

<div>

<?php the_content(); ?>


</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
<p>
									Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?>
									<br/>Site propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.wildcodeschool.fr">La Wild Code School</a>
									<br/><?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes.
								</p>

