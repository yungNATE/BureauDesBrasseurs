<?php
/**
 * The trombinoscope template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BureauDesBrasseurs
 */

 /*
 * Template Name: Template Trombinoscope
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part( 
        'template-parts/banner',
        null, 
        array(
            'nom' => array('val1','val2'),
            ) 
        );?>
</main>

<?php 
get_footer();