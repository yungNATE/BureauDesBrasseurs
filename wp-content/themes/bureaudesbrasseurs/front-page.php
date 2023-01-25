<?php
/**
 * The frontpage template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BureauDesBrasseurs
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    if ( have_posts() ) :
        
        while ( have_posts() ) :
            the_post();
        endwhile;
        
        the_posts_navigation();
        
        else :
            
            get_template_part( 'template-parts/content', 'none' );
            
        endif;
        ?>

</main>

<?php
get_footer();