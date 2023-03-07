<?php
    $id     = $args['id'];
    $title  = $args['title'];
    $text   = $args['text'];
?>
<section class="medium bubbleAndText" id="<?= $id ?>">
    <div class="bubbles">
        <?php $defaultBubbleNumber = 4; ?>
        <?php $defaultBubbleSize = 200; //px ?>
        <?php $bubbleShrink = 25; //px ?>

        <?php // chaque bulle fait $bubbleShrink px de moins que la précédente (en partant de $defaultBubbleSize px)
            $bdbHeadmasters = [
                ["surname" => "Jean", "name" => "Dupont"],
                ["surname" => "Jean", "name" => "Dupond"],
                ["surname" => "Jean", "name" => "Durand"],
                ["surname" => "Jean", "name" => "Durex" ],
            ];

            for ($i = 0; $i < $defaultBubbleNumber; $i++) : ?>
            <?php $bubbleSize = $defaultBubbleSize - ($bubbleShrink * $i); ?>
                <div class="bubble" 
                    style="
                        --bubbleBackgroundURL: url(<?= get_stylesheet_directory_uri()."/img/bubbleGenericBackground.jpg" ?>); 
                        --bubbleWidth: <?= $bubbleSize ?>px; 
                        --bubbleHeight: <?= $bubbleSize ?>px;" >
                
                    <!-- <span class="bubbleName">
                        <span> <?php// $bdbHeadmasters[$i]["surname"] ?></span>
                        <span><?php// $bdbHeadmasters[$i]["name"] ?></span>
                    </span> -->
                    <span class="bubbleName">
                        <?= $bdbHeadmasters[$i]["surname"] . "\n" . $bdbHeadmasters[$i]["name"] ?>
                    </span>
                </div>
        <?php endfor; ?>

    </div>
    <div class="text text-with-circle">
        <h2><?= $title ?></h2>
        <p><?= $text ?></p>
    </div>
</section>