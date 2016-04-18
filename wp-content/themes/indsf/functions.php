<?php 
function register_my_menus() {
  register_nav_menus(
    array(
      'ecole-col1' => __( 'École 1ère colonne' ),
      'ecole-col2' => __( 'École 2ème colonne' ),
      'ecole-col3' => __( 'École 3ème colonne' ),
      'college-col1' => __( 'Collège 1ère colonne' ),
      'college-col2' => __( 'Collège 2ème colonne' ),
      'college-col3' => __( 'Collège 3ème colonne' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
// On ajoute le support des vignettes/miniatures d'articles
add_theme_support( 'post-thumbnails' );
?>