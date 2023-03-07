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
    <div class="equipes">
        <div class="circle-img-text-swiper">
            <div class="text text-with-circle">
                <h2>La team DD</h2>
                <p> La team des écolos bobo !
                    (tout le monde les déteste, mais on supporte)

                    Cette équipe te permet, entre autre, de boire ta bière l’esprit tranquille d’avoir sauvé des petits phoques. 
                    Nos bières combattent activement le réchauffement de l’œsophage et de la planète !
                </p>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>
        
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

</main>

<?php 
get_footer();