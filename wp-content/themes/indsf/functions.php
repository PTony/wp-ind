<?php 
function register_my_menus() {
  register_nav_menus(
    array(
      // 'identifiant désiré' => ( 'Nom désiré'),
      'ecole-col1'    => __( 'École 1ère colonne' ),
      'ecole-col2'    => __( 'École 2ème colonne' ),
      'ecole-col3'    => __( 'École 3ème colonne' ),
      'college-col1'  => __( 'Collège 1ère colonne' ),
      'college-col2'  => __( 'Collège 2ème colonne' ),
      'college-col3'  => __( 'Collège 3ème colonne' ),
      'lycee-col1'    => __( 'Lycée 1ère colonne' ),
      'lycee-col2'    => __( 'Lycée 2ème colonne' ),
      'lycee-col3'    => __( 'Lycée 3ème colonne' ),
      'escc-col1'     => __( 'ESCC 1ère colonne' ),
      'escc-col2'     => __( 'ESCC 2ème colonne' ),
      'footer-col1'   => __( 'Footer colonne 1' ),
      'footer-col2'   => __( 'Footer colonne 2' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
// On ajoute le support des vignettes/miniatures d'articles
add_theme_support( 'post-thumbnails' );
?>