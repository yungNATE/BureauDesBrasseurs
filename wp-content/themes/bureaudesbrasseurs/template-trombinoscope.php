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


    <?php get_template_part( 
        // TODO : passer toute la data injectée en BD !
        'template-parts/bubblesAndText',
        null, 
        array(
            'id'    => "bnbTrombi",
            'title' => "Mais ... Qui compose le BDB en A22 ?!",
            'text'  => "Lorem ipsum dolor sit amet consectetur. Convallis volutpat pretium eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.Lorem ipsum dolor sit amet consectetur. Convallis volutpat pretium eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.Lorem ipsum dolor sit amet consectetur. Convallis volutpat pretium eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.
                        eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.Lorem ipsum dolor sit amet consectetur. Convallis volutpat pretium eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.
                        eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.Lorem ipsum dolor sit amet consectetur. Convallis volutpat pretium eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.         
                        eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.Lorem ipsum dolor sit amet consectetur. Convallis volutpat pretium eu sem quis massa facilisis sodales. Euismod at hac in at tortor nisi mauris viverra. Viverra maecenas amet congue lorem. Malesuada malesuada proin tristique purus nulla at adipiscing.",
        ) 
    );?>

    <div class="spacer" style="--background: url(<?= get_stylesheet_directory_uri() ?>/img/trombinoscopeBackground.jpg)"></div>


    <?php // TODO : Continuer les swipers page trombinoscope ?>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</main>

<?php 
get_footer();