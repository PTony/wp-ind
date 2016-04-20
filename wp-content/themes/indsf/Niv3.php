<?php 
/* 
Template Name: Niv3
*/ 
?>

<?php get_header(); ?>


    <?php

                    // 1. on défini ce que l'on veut

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category_name' => 'ecole-objectif3'
                    );

                    // 2. on exécute la query

                    $my_query = new WP_Query($args);

                    // 3. on lance la boucle !

                    if($my_query->have_posts()) : while ($my_query->have_posts() ) : $my_query->the_post();
                ?> 

                        <div class="col-md-12 about_me"> 
                            <?php the_content(); ?>
                        </div>

                <?php
                    endwhile;
                    endif;

                    // 4. On réinitialise à la requête principale (important)

                    wp_reset_postdata();
                ?>



	<div class="info-prat"

	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	    <h3><?php the_title(); ?></h3>

	    <div>

	    <?php the_content(); ?>

	    </div>

	    <?php endwhile; ?>

	    <?php endif; ?>
	</div>

<?php get_footer(); ?>

