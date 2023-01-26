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
        while (have_posts()): the_post();
            for ($i=0; $i < 40; $i++) { 
                ?><h1>Bureau des brasseurs</h1><?php 
            }
        endwhile;
    ?>
</main>

<?php
get_footer();